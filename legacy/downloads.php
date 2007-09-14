<?php
    /* $Id$ */
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    print_header('MacPorts -- Downloads', 'utf-8');
?>

<div id="content">
    <h2 class="hdr">Available Downloads</h2>
<?php
    $dir=".";
    // Read files from the dirctory
    $files = array();
    $rep=opendir($dir);
    while ($file = readdir($rep)) {
        if (preg_match('/^(\..*)|(.*\.(php|css|html|js))$/', $file) || is_dir($file)) {
            continue;
        }
        // Add file to array, as key, with modtime as value
        $files[$file] = filemtime($file);
    }
    closedir($rep);

    // Print the table only if the $files array is non-emtpy
    if (count($files)) {
        // Sort the array in reverse order by value (modtime)
        arsort($files);
        // Emit the files, with dates
        echo "<table>";
        foreach ($files as $f => $t) {
            echo "<tr>";
            echo "<td>".date("d-M-Y G:i", $t)."</td><td><a href=\"downloads/$f\">$f</a></td>\n";
            echo "</tr>";
        }
        echo "</table>";
    }
?>
</div>

<?php
    print_footer();
?>
