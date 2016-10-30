<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:set fenc=utf-8 filetype=php et sw=4 ts=4 sts=4: */
    /* Web client to the PortIndex2MySQL script located in MacPorts base/portmgr/jobs svn directory. */
    /* $Id$ */
    /* Copyright (c) 2004, OpenDarwin. */
    /* Copyright (c) 2004-2007, The MacPorts Project. */
    
    include_once("includes/common.inc");
    
    $portsdb_info = portsdb_connect();
    $sql = "SELECT ceil(extract( epoch from activity_time)) as tim FROM log ORDER BY tim DESC";
    $result = pg_query($sql);
    if ($result && $row = pg_fetch_row($result)) {
        $date = date('Y-m-d', $row[0]);
        $time = date('H:i:s e', $row[0]);
    } else {
        $date = '(unknown)';
        $time = '(unknown)';
    }
    $by = isset($_GET['by']) ? $_GET['by'] : '';
    $substr = isset($_GET['substr']) ? $_GET['substr'] : '';
    $page = isset($_GET['page']) ? max(intval($_GET['page']), 1) : '1';
    $pagesize = isset($_GET['pagesize']) ? max(intval($_GET['pagesize']), 1) : 50; # arbitrary setting

    # protect against XSS
    $phpself = htmlspecialchars($_SERVER['PHP_SELF']);

    print_header('The MacPorts Project -- Available Ports', 'utf-8');
?>

<div id="content">

    <h2 class="hdr">MacPorts Portfiles</h2>

    <p>The MacPorts Project currently distributes <b><?php print $portsdb_info['num_ports']; ?></b> ports, organized across
    <?php print $portsdb_info['num_categories']; ?> different categories and available below for viewing. This form allows
    you to search the MacPorts software index, last updated on <?php print '<b>' . $date . '</b> at <b>' . $time . '</b>'; ?>.
    </p>
    
    <br />

    <form action="<?php print $phpself; ?>" method="get">
        <p>
            <label>Search by:</label>
            <select name="by">
                <option value="name"<?php if ($by == 'name') { print ' selected="selected"'; } ?>>Software Title</option>
                <option value="category"<?php if ($by == 'category') { print ' selected="selected"'; } ?>>Category</option>
                <option value="maintainer"<?php if ($by == 'maintainer') { print ' selected="selected"'; } ?>>Maintainer</option>
<!--                <option value="library"<?php if ($by == 'dependency') { print ' selected="selected"'; } ?>>Dependency</option> -->
                <option value="variant"<?php if ($by == 'variant') { print ' selected="selected"'; } ?>>Variant</option>
                <option value="platform"<?php if ($by == 'platform') { print ' selected="selected"'; } ?>>Platform</option>
<!--                <option value="license"<?php if ($by == 'license') { print ' selected="selected"'; } ?>>License</option> -->
            </select>
            <input type="text" name="substr" value="<?php print htmlspecialchars($substr); ?>" size="40" />
            <input type="submit" value="Search" />
        </p>
    </form>

    <p>Or view the complete <a href="<?php print $phpself; ?>?by=all">ports list (<?php print $portsdb_info['num_ports']; ?>
    ports)</a>.</p>
    <br />

<?php
    /* If no valid search criteria is specified (by set and not equal to all and a valid substring) we output port categories
     as possible searches */
    if (!$by || ($by != 'all' && !$substr)) {
        $query = "SELECT DISTINCT category FROM categories ORDER BY category";
        $result = pg_query($query);
        if ($result) {
            $max_entries_per_column = floor($portsdb_info['num_categories']/4);
            $columns = 0;
            print '<h3>Port Categories</h3><div id="categories"><ul>';
            while ($columns < 4) {
                $entries_per_column = 0;
                print '<li><ul>';
                while ($row = pg_fetch_assoc($result)) {
                    print "<li><a href=\"$phpself?by=category&amp;substr=" . urlencode($row['category']) . '">'
                    . htmlspecialchars($row['category']) . '</a></li>';
                    if ($entries_per_column == $max_entries_per_column) break;
                    $entries_per_column++;
                }
                print '</ul></li>';
                $columns++;
            }
            print '</ul></div>';
        }
    }

    /* If valid criteria is specified (by set and a valid substring, or by set to all) we poll the db and display the results */
    if ($by && ($substr || $by == 'all')) {
        $fields = 'name, path, version, description';
        $tables = "portfiles AS p";
        switch ($by) {
        case 'name':
            #TODO: was pg_escape_string. Current charset taken into account ?
            $criteria = "p.name LIKE '%" . pg_escape_string($substr) . "%'";
            break;
        case 'category':
            $tables .= ", categories AS c";
            $criteria = "c.portfile = p.name AND c.category = '" . pg_escape_string($substr) . "'";
            break;
        case 'maintainer':
            $tables .= ", maintainers AS m";
            $criteria = "m.portfile = p.name AND m.maintainer LIKE '%" . pg_escape_string($substr) . "%'";
            break;
        case 'library':
            $criteria = "p.name = '" . pg_escape_string($substr) . "'";
            break;
        case 'variant':
            $tables .= ", variants AS v";
            $criteria = "v.portfile = p.name AND v.variant = '" . pg_escape_string($substr) . "'";
            break;
        case 'platform':
            $tables .= ", platforms AS pl";
            $criteria = "pl.portfile = p.name AND pl.platform = '" . pg_escape_string($substr) . "'";
            break;
/*
        case 'license':
            $tables .= ", $portsdb_name.licenses AS lc";
            $criteria = "lc.portfile = p.name AND lc.license = '" . pg_escape_string($substr) . "'";
            break;
*/
        case 'all':
            $criteria = '';
            break;
        default:
            $criteria = '0';
            break;
        }
        $where = ($criteria == '' ? '' : "WHERE $criteria");
        $query = "SELECT DISTINCT $fields FROM $tables $where ORDER BY name";
        $result = pg_query($query);
        
        /* Main query sent to the DB */
        if ($result) {
            $paging = false;
            $numrows = pg_num_rows($result);
            if ($numrows > $pagesize) {
                $paging = true;
                $pagecount = ceil($numrows / $pagesize);
                $page = min($page, $pagecount);
                $offset = $pagesize * ($page-1);
                $curpagesize = min($pagesize, $numrows - $offset);
                # generate a paging control and cache it so we can show it twice
                $pagecontrol = "<p>Page ";
                for ($i = 1; $i <= $pagecount; $i++) {
                    if ($i != 1) {
                        $pagecontrol .= " | ";
                    }
                    if ($i == $page) {
                        $pagecontrol .= "<b>$i</b>";
                    } else {
                        $pagecontrol .= "<a href=\"$phpself?by=$by&amp;substr=" . urlencode($substr) . "&amp;page=$i&amp;pagesize=$pagesize\">$i</a>";
                    }
                }
                $pagecontrol .= "</p>";

                # seek the data pointer by fetching the row before the interesting one
                # FIXME: maybe should be offset - 1
                if($offset > 0){
                	pg_fetch_row($result, $offset);
                }
            }

            print '<h3>Query Results</h3>';
            if ($paging) {
                print $pagecontrol;
                $numrowtext = ($offset+1) . "-" . ($offset + $curpagesize) . " of $numrows Portfile" . ($curpagesize == 1 ? '' : 's');
            } else {
                $numrowtext = "$numrows Portfile" . ($numrows == 1 ? '' : 's');
            }
            print "<p><i>$numrowtext Selected</i></p>";

            print '<dl>';
            /* Iterate over the entire set of returned ports */
            for ($row = pg_fetch_assoc($result), $i = 0;
                 $row && (!$paging || $i < $curpagesize);
                 $row = pg_fetch_assoc($result), $i++) {

                /* Port name and Portfile URL */
                print "<dt><b><a href=\"${trac_url}browser/trunk/dports/" . $row['path'] . "/Portfile\">" . htmlspecialchars($row['name'])
                . '</a></b> ' . htmlspecialchars($row['version']) . '</dt>';
                
                print '<dd>';
                /* Port short description */
                print htmlspecialchars($row['description']) . '<br />';
                
                /* Licenses */
                $nquery = "SELECT license FROM licenses WHERE portfile='" . pg_escape_string($row['name']) .
                "' ORDER BY license";
                $nresult = pg_query($nquery);
                if ($nresult && pg_num_rows($nresult) > 0) {
                    print '<i>Licenses:</i> ';
                    while ($nrow = pg_fetch_row($nresult)) {
                        print "<a href=\"$phpself?by=license&amp;substr=" . urlencode($nrow[0]) . '">'
                        . htmlspecialchars($nrow[0]) . '</a> ';
                    }
                    print "<br />";
                }

                /* Maintainers */
                $nquery = "SELECT maintainer FROM maintainers WHERE portfile='" . pg_escape_string($row['name']) .
                "' ORDER BY is_primary DESC, maintainer";
                $nresult = pg_query($nquery);
                if ($nresult) {
                    $primary = 1;
                    print '<i>Maintained by:</i>';
                    while ($nrow = pg_fetch_row($nresult)) {
                        if ($primary) { print ' <b>'; }
                        else { print ' '; }
                        print obfuscate_email($nrow[0]);
                        if ($primary) { print '</b>'; }
                        $primary = 0;
                    }
                }

                /* Categories */
                $nquery = "SELECT category FROM categories WHERE portfile='" . pg_escape_string($row['name']) .
                "' ORDER BY is_primary DESC, category";
                $nresult = pg_query($nquery);
                if ($nresult) {
                    $primary = 1;
                    print '<br /><i>Categories:</i>';
                    while ($nrow = pg_fetch_row($nresult)) {
                        if ($primary) { print ' <b>'; }
                        else { print ' '; }
                        print "<a href=\"$phpself?by=category&amp;substr=" . urlencode($nrow[0]) . '">'
                        . htmlspecialchars($nrow[0]) . '</a>';
                        if ($primary) { print '</b>'; }
                        $primary = 0;
                    }
                }

                /* Platforms */
                $nquery = "SELECT platform FROM platforms WHERE portfile='" . pg_escape_string($row['name']) .
                "' ORDER BY platform";
                $nresult = pg_query($nquery);
                if ($nresult) {
                    print '<br /><i>Platforms:</i> ';
                    while ($nrow = pg_fetch_row($nresult)) {
                        print "<a href=\"$phpself?by=platform&amp;substr=" . urlencode($nrow[0]) . '">'
                        . htmlspecialchars($nrow[0]) . '</a> ';
                    }
                }

                /* Dependencies */
                $nquery = "SELECT library FROM dependencies WHERE portfile='" . pg_escape_string($row['name']) .
                "' ORDER BY library";
                $nresult = pg_query($nquery);
                if ($nresult && pg_num_rows($nresult) > 0) {
                    print '<br /><i>Dependencies:</i> ';
                    while ($nrow = pg_fetch_row($nresult)) {
                        $library = preg_replace('/^(?:[^:]*:){1,2}/', '', $nrow[0]);
                        print "<a href=\"$phpself?by=library&amp;substr=" . urlencode($library) . '">'
                        . htmlspecialchars($library) . '</a> ';
                    }
                }

                /* Variants */
                $nquery = "SELECT variant FROM variants WHERE portfile='" . pg_escape_string($row['name']) .
                "' ORDER BY variant";
                $nresult = pg_query($nquery);
                if ($nresult && pg_num_rows($nresult) > 0) {
                    print '<br /><i>Variants:</i> ';
                    while ($nrow = pg_fetch_row($nresult)) {
                        print "<a href=\"$phpself?by=variant&amp;substr=" . urlencode($nrow[0]) . '">'
                        . htmlspecialchars($nrow[0]) . '</a> ';
                    }
                }

                print '<br /><br /></dd>';
            } /* while (listing of matching ports) */
            print '</dl>';

            if ($paging) {
                print $pagecontrol;
            }

        /* When we hit this else, the query failed for some reason */
        } else {
            print '<p>An Error Occurred: '. pg_last_error($portsdb_info['connection_handler']) . '</p>';
        }
        
    } /* if (main query sent to the DB) */
?>

</div>


<?php
    print_footer();
    pg_close($portsdb_info['connection_handler']);
?>
