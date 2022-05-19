<?php
/*
Plugin Name: rPress
Plugin URI: https://db.romarin.dev/
description: rPress permet de récupérer facillement les données des futures sorties de films
Version: 1.0
Author: Romain R.
Author URI: https://db.romarin.dev/
License: GPL2
*/


if (!function_exists('rp_getFilm')) :
    function rp_getFilm()
    {
        // fetch data from tmdb api
        $url = 'https://api.themoviedb.org/3/movie/popular?api_key=<CLÉ-API>&language=fr-FR&page=1';
        $response = wp_remote_get($url);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body);
        $film = $data->results;
        return $film;
    }
endif;
?>

<?php function affFilmData()
{?>
        <?php $content = null ?>
    <div class="flex justify-center text-white mx-20 divider font-semibold before:bg-white after:bg-white">FUTURES
        SORTIES CINÉMA
    </div>
    <div class="grid grid-cols-4">
        <?php $film = rp_getFilm();
        foreach ($film as $film) {
            ob_start();
            ?>
            <div class="flex py-5 justify-center">
                <div class="card !rounded w-[20rem] bg-base-100 shadow-xl">
                    <figure><img class="image-full h-[25rem] w-full object-fill"
                                 src="https://image.tmdb.org/t/p/w500<?php echo $film->poster_path ?>"/></figure>
                    <div class="card-body">
                        <div class="entry-title card-title tooltip" data-tip="<?php echo $film->title ?>">
                            <span class="!text-left overflow-hidden inline-block text-ellipsis whitespace-nowrap w-fit"><?php echo $film->title ?></span>
                        </div>
                        <span>Sortie prévu le: <?php echo $film->release_date ?></span>
                        <span></span>
                        <div class="card-actions justify-end">
                            <a href="https://www.themoviedb.org/movie/<?php echo $film->id ?>?language=fr"
                               class="btn bg-zinc-900 mt-2"><span class="mr-1"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="2"
                                                                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>Voir
                                plus sur TMDB</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php $content = ob_get_contents()?>
        <?php } ?>
    </div>
    <?php return $content?>
<?php }
add_shortcode('affFilmData', 'affFilmData'); ?>
