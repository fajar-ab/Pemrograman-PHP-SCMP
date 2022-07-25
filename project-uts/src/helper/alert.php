<?php

const ALERT_INFO = 1;
const ALERT_SUCCESS = 2;
const ALERT_WARNING = 3;
const ALERT_DANGER = 4;

function alert(string $pesan, int $icon)
{
  switch ($icon) {
    case 1:
      echo <<<ALT
      <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 1040">
        <div class="alert alert-primary d-flex align-items-center shadow p-3" role="alert">
          <i class="fa-solid fa-circle-info me-2"></i>
          <div>
            $pesan
          </div>
        </div>
      </div>
      ALT;
      break;
    case 2:
      echo <<<ALT
      <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 1040">
        <div class="alert alert-success d-flex align-items-center shadow p-3" role="alert">
          <i class="fa-solid fa-circle-check me-2"></i>
          <div>
            $pesan
          </div>
        </div>
      </div>
      ALT;
      break;
    case 3:
      echo <<<ALT
      <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 1040">
        <div class="alert alert-warning d-flex align-items-center shadow p-3" role="alert">
          <i class="fa-solid fa-triangle-exclamation me-2"></i>
          <div>
            $pesan
          </div>
        </div>
      </div>
      ALT;
      break;
    case 4:
      echo <<<ALT
      <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 1040">
        <div class="alert alert-danger d-flex align-items-center shadow p-3" role="alert">
          <i class="fa-solid fa-circle-check me-2"></i>
          <div>
            $pesan
          </div>
        </div>
      </div>
      ALT;
      break;
    default:
      echo <<<ALT
      <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 1040">
        <div class="alert alert-primary d-flex align-items-center shadow p-3" role="alert">
          <i class="fa-solid fa-circle-xmark ms-2"></i>
          <div>
            $pesan
          </div>
        </div>
      </div>
      ALT;
      break;
  }
}
