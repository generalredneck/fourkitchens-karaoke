<?php

namespace Drupal\openkj_musixmatch\Plugin\QueueWorker;

use Drupal\Core\Queue\QueueWorkerBase;
/**
 * Processes Tasks for Learning.
 *
 * @QueueWorker(
 *   id = "openkj_musixmatch_song_worker",
 *   title = @Translation("Song Worker for OpenKJ MusixMatch Integration"),
 *   cron = {"time" = 60}
 * )
 */
class SongWorker extends QueueWorkerBase {
  /**
   * {@inheritdoc}
   */
  public function processItem($data) {
    Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'be9b38cfc0f3609900ee8d5cb0615e05');
    $api_instance = new Swagger\Client\Api\TrackApi();
    $album_id = "14250417"; // string | The musiXmatch album id
    $format = "json"; // string | output format: json, jsonp, xml

    try {
        $result = $api_instance->trackSearchGet(
          'json',
          null,
          $data['song'],
          $data['artist']
        );
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling AlbumApi->albumGetGet: ', $e->getMessage(), PHP_EOL;
    }
  }
}
