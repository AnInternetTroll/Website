
                    <?php
                    $xmlDoc = new DOMDocument();

                    $i = 0;
                    foreach ($currentDir as $dir) {
                        if (is_dir($dir) && $dir != "." && $dir != "..") {
                            $dir2      = scandir($dir);
                            $checkProp = array_search("properties.xml", $dir2);
                            if ($checkProp == true) {
                                if ($i == 0) {
                                    echo '<div class="card-deck">';
                                }
                                $xmldata = simplexml_load_file($dir . "/properties.xml") or die("Failed to load");

                                $title       = $xmldata->data[0]->title;
                                $description = $xmldata->data[0]->description;
                                if ($page == "home"){
                                echo '

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">' . $title . '</h5>
                                <p class="card-text">' . $description . '</p>
                            </div>
                        </div>
                                        ';
                                $i += 1;
                                if ($i == 2) {
                                    echo '</div>';
                                    $i = 0;
                                }
                            } else {
                                echo "false ";
                            }}
                        }
                    }
                    if ($i == 1 || $i == 2) {
                        echo '</div>';
                    }
                    ?>
