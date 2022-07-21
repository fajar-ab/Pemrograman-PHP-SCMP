<?php

const SUCCESS = 1;

function alert(string $pesan, int $icon = SUCCESS): string
{
  switch ($icon) {
    case 1:
      return <<<ALERT
      <div class="position-absolute top-50 start-50 translate-middle">
        <div class="alert alert-primary d-flex align-items-center p-3" role="alert">
          <i class="fas fa-check-circle me-2"></i>
          <div>Lorem ipsum dolor sit amet consecte dddkdkd</div>
        </div>
      </div>
      ALERT;
      break;
  }
}
