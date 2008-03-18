<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4 */
    /* Web client to the PortIndex2MySQL script located in MacPorts base/portmgr/jobs svn directory. */
    /* $Id$ */
    /* Copyright (c) 2004, OpenDarwin. */
    /* Copyright (c) 2004-2007, The MacPorts Project. */
    
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    print_header('The MacPorts Project -- Available Ports', 'utf-8');
    $portsdb_info = portsdb_connect($portsdb_host, $portsdb_user, $portsdb_passwd);
    $by = isset($_GET['by']) ? $_GET['by'] : '';
    $substr = isset($_GET['substr']) ? $_GET['substr'] : '';

    $sql = "SELECT UNIX_TIMESTAMP(activity_time) FROM $portsdb_name.log ORDER BY UNIX_TIMESTAMP(activity_time) DESC";
    $result = mysql_query($sql);
    if ($result && $row = mysql_fetch_row($result)) {
        $date = date('Y-m-d', $row[0]);
        $time = date('H:i:s e', $row[0]);
    } else {
        $date = '(unknown)';
        $time = '(unknown)';
    }
?>

<div id="content">

    <h2 class="hdr">MacPorts Portfiles</h2>

    <p>The MacPorts Project currently distributes <b><?php print $portsdb_info['num_ports']; ?></b> ports, organized across
    <?php print $portsdb_info['num_categories']; ?> different categories and available below for viewing. This form allows
    you to search the MacPorts software index, last updated on <?php print '<b>' . $date . '</b> at <b>' . $time . '</b>'; ?>.
    </p>
    
    <br />

    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
        <p>
            <label>Search by:</label>
            <select name="by">
                <option value="name"<?php if ($by == "name") { print " selected=\"selected\""; } ?>>Software Title</option>
                <option value="cat"<?php if ($by == "cat") { print " selected=\"selected\""; } ?>>Category</option>
                <option value="maintainer"<?php if ($by == "maintainer") { print " selected=\"selected\""; } ?>>Maintainer</option>
                <option value="dep"<?php if ($by == "dep") { print " selected=\"selected\""; } ?>>Dependency</option>
            </select>
            <input type="text" name="substr" size="40" />
            <input type="submit" value="Search" />
        </p>
    </form>

    <p>Or view the complete <a href="<?php print $_SERVER['PHP_SELF']; ?>?by=all">ports list (<?php print $portsdb_info['num_ports']; ?>
    ports)</a>.</p>
    <br />

<?php
    if (!$by || (!$substr && $by != "all")) {
        $query = "SELECT DISTINCT category FROM $portsdb_name.categories ORDER BY category";
        $result = mysql_query($query);
        if ($result) {
            print "<h3>Port Categories</h3>\n<div id=\"categories\">\n<ul>";
            $max_entries_per_column = floor($portsdb_info['num_categories']/4);
            $columns = 0;
            while ($columns < 4) {
                print "<li>\n<ul>\n";
                $entries_per_colum = 0;
                while ($row = mysql_fetch_assoc($result)) {
                    print '<li><a href="' . $_SERVER['PHP_SELF'] . '?by=cat&amp;substr=' . urlencode($row['category']) . '">'
                    . htmlspecialchars($row['category']) . '</a></li>';
                    if ($entries_per_colum == $max_entries_per_column) break;
                    $entries_per_colum++;
                }
                print "</ul>\n</li>";
                $columns++;
            }
            print "</ul>\n\n</div>";
        }
    }

    if ($by && ($substr || $by == "all")) {
        $fields = "name, path, version, description";
        $query = "1";
        $tables = "$portsdb_name.portfiles p";
        if ($by == "name") {
            $query .= " AND p.name LIKE '%" . mysql_real_escape_string($substr) . "%'";
        }
        if ($by == "dependency") {
            $query .= " AND p.name='" . mysql_real_escape_string($substr) . "'";
        }
        if ($by == "cat") {
            $tables .= ", $portsdb_name.categories c";
            $query .= " AND c.portfile=p.name AND c.category='" . mysql_real_escape_string($substr) . "'";
        }
        if ($by == "variant") {
            $tables .= ", $portsdb_name.variants v";
            $query .= " AND v.portfile=p.name AND v.variant='" . mysql_real_escape_string($substr) . "'";
        }
        if ($by == "platform") {
            $tables .= ", $portsdb_name.platforms pl";
            $query .= " AND pl.portfile=p.name AND pl.platform ='" . mysql_real_escape_string($substr) . "'";
        }
        if ($by == "maintainer") {
            $tables .= ", $portsdb_name.maintainers m";
            $query .= " AND m.portfile=p.name AND m.maintainer LIKE '%" . mysql_real_escape_string($substr) . "%'";
        }
        $query = "SELECT DISTINCT $fields FROM $tables WHERE $query ORDER BY name";
        $result = mysql_query($query);
        if ($result) {
?>
            <h3>Query Results</h3>

            <p><i><?php print mysql_num_rows($result) . ' ' . (mysql_num_rows($result) == 1 ? 'Portfile' : 'Portfiles') . 
            ' Selected'; ?></i></p>

            <dl>
<?php
            while ($row = mysql_fetch_assoc($result)) {
?>
                <dt><b><a href="<?php print $trac_url . 'browser/trunk/dports/' . $row['path'] . '/Portfile'; ?>"><?php print
                htmlspecialchars($row['name']); ?></a></b> <?php print htmlspecialchars($row['version']); ?></dt>
                <dd>
                    <?php print htmlspecialchars($row['description']); ?>
                    <br />
<?php
/* MAINTAINERS */
                    $nquery = "SELECT maintainer FROM $portsdb_name.maintainers WHERE portfile='" . mysql_real_escape_string($row['name']) .
                    "' ORDER BY is_primary DESC, maintainer";
                    $nresult = mysql_query($nquery);
                    if ($nresult) {
?>
                        <i>Maintained by:</i>
<?php
                        $primary = 1;
                        while ($nrow = mysql_fetch_array($nresult)) {
                            if ($primary) { print "<b>"; }
                            else { print " "; }
                            $addr = obfuscate_email($nrow[0]);
                            print $addr;
                            if ($primary) { print "</b>"; }
                            $primary = 0;
                        }
                    }

/* CATEGORIES */
                    $nquery = "SELECT category FROM $portsdb_name.categories WHERE portfile='" . mysql_real_escape_string($row['name']) .
                    "' ORDER BY is_primary DESC, category";
                    $nresult = mysql_query($nquery);
                    if ($nresult) {
?>
                        <br />
                        <i>Categories:</i>
<?php
                        $primary = 1;
                        while ($nrow = mysql_fetch_assoc($nresult)) {
                            if ($primary) { print "<b>"; }
?>
                            <a href="<?php print $_SERVER['PHP_SELF']; ?>?by=cat&amp;substr=<?php print urlencode($nrow['category']); ?>">
                            <?php print htmlspecialchars($nrow['category']); ?></a>
<?php
                            if ($primary) { print "</b>"; }
                            $primary = 0;
                        }
                    }

/* PLATFORMS */
                    $nquery = "SELECT platform FROM $portsdb_name.platforms WHERE portfile='" . mysql_real_escape_string($row['name']) .
                    "' ORDER BY platform";
                    $nresult = mysql_query($nquery);
                    if ($nresult && mysql_num_rows($nresult) > 0) {
?>
                        <br />
                        <i>Platforms:</i>
<?php
                        while ($nrow = mysql_fetch_array($nresult)) {
                            $platform = $nrow[0];
?>
                            <a href="<?php print $_SERVER['PHP_SELF']; ?>?by=platform&amp;substr=<?php print urlencode($platform); ?>">
                            <?php print htmlspecialchars($platform); ?></a>
<?php
                        }
                    }

/* DEPENDENCIES */
                    $nquery = "SELECT library FROM $portsdb_name.dependencies WHERE portfile='" . mysql_real_escape_string($row['name']) .
                    "' ORDER BY library";
                    $nresult = mysql_query($nquery);
                    if ($nresult && mysql_num_rows($nresult) > 0) {
?>
                        <br />
                        <i>Dependencies:</i>
<?php
                        while ($nrow = mysql_fetch_array($nresult)) {
                            // lib:libpng.3:libpng -> libpng
                            // might need adapting to the new port: depspec
                            $library = eregi_replace("^([^:]*:[^:]*:|[^:]*:)", "", $nrow[0]);
?>
                            <a href="<?php print $_SERVER['PHP_SELF']; ?>?by=library&amp;substr=<?php print urlencode($library); ?>">
                            <?php print htmlspecialchars($library); ?></a>
<?php
                        }
                    }

/* VARIANTS */
                    $nquery = "SELECT variant FROM $portsdb_name.variants WHERE portfile='" . mysql_real_escape_string($row['name']) .
                    "' ORDER BY variant";
                    $nresult = mysql_query($nquery);
                    if ($nresult && mysql_num_rows($nresult) > 0) {
?>
                        <br />
                        <i>Variants:</i>
<?php
                        while ($nrow = mysql_fetch_array($nresult)) {
                            $variant = $nrow[0];
?>
                            <a href="<?php print $_SERVER['PHP_SELF']; ?>?by=variant&amp;substr=<?php print urlencode($variant); ?>">
                            <?php print htmlspecialchars($variant); ?></a>
<?php
                        }
                    }
?>
                    <br />
                    <br />
                </dd>

<?php
            }

        } else {
            print "An Error Occurred. (501)";
        }
?>
        </dl>

<?php
    }
?>

</div>


<?php
    print_footer();
    mysql_close($portsdb_info['connection_stream']);
?>
