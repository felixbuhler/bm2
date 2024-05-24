<section id="posters">
    <h2>
        Plakate
       <!-- <a href="" title="Alle Motive herunterladen" class="button">Alle Motive herunterladen</a> -->
    </h2>
    <div id="gallery">
        <div class="artwork big" style="--background: url(./components/posters/images/bm_basic.webp);">
            <a href=""><span class="button">Basic </span></a>
        </div>


        <?php

        // Step 1: Get the JSON file
        $jsondata = file_get_contents('./components/posters/posters.json');

        // Step 2: Decode the data
        $data = json_decode($jsondata, true);

        // Step 3: Use the data
        if (is_array($data) && isset($data['posters'])) {
            foreach ($data['posters'] as $poster) {
                echo '<div class="artwork" style="--background: url(';
                echo $poster['imageUrl'];
                echo ')">';

                echo ' <a href="';
                echo $poster['downloadUrl'];
                echo '"';
                echo 'title="Download ';
                echo $poster['emoji'];
                echo '">';

                echo '<span class="button">' . $poster['emoji'] . '</span>';

                echo '</a></div>';
            }
        }

        // Error Handling
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo 'JSON Error: ' . json_last_error_msg();
        }

        ?>

    </div>
</section>