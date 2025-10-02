<?php
// Simple page redirect
function redirect($page)
{
  header('location: ' . URLROOT . '/' . $page);
}


function fn_resize($image_resource_id, $width, $height)
{

  $target_width = 392;
  $target_height = 270;
  $target_layer = imagecreatetruecolor($target_width, $target_height);
  imagecopyresampled($target_layer, $image_resource_id, 0, 0, 0, 0, $target_width, $target_height, $width, $height);
  return $target_layer;
}

// Flash message helper
function notify($name = '', $message = '', $class = 'alert alert-success')
{
  if (!empty($name)) {
    if (!empty($message) && empty($_SESSION[$name])) {
      if (!empty($_SESSION[$name])) {
        unset($_SESSION[$name]);
      }
      $_SESSION[$name] = $message;
      $_SESSION[$name . '_class'] = $class;
    } elseif (empty($message) && !empty($_SESSION[$name])) {
      $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : 'alert alert-info';

      echo '
            <div class="modal fade" id="flashModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg border-none">
                  <div class="modal-header ' . $class . '">
                    <h5 class="modal-title m-0">Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body lead  fs-5 fst-italic fw-bold">
                    ' . $_SESSION[$name] . '
                  </div>
                </div>
              </div>
            </div>';

      unset($_SESSION[$name]);
      unset($_SESSION[$name . '_class']);
    }
  }
}
