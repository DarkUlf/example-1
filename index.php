<?php
require_once 'functions.php';
define('DOMAIN', $_SERVER['SERVER_NAME']);
define('TYPE_ORDER', 1);
define('TYPE_CALC', 2);

$_CONFIG = array(
    'title' => 'Ласточка',
    'siteName' => 'Ласточка',
    'contactPhone' => 79128617968,
    'contactEmail' => 'auto.servis@lenta.ru',
    'phoneFormat' => '8 ($1) $2-$3-$4',
    'receivers' => array('auto.servis@lenta.ru'),
    'mimeTypes' => array(
        'image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'application/x-compressed', 'application/x-gzip', 'application/pdf', 'application/x-tar', 'application/zip',
    ),
    'extensions' => array(
        'jpeg', 'jpg', 'png', 'gif', 'bmp', 'gz', 'pdf', 'tar', 'zip',
    ),
);

if (isset($_POST['Order'])) {
    $data = $_POST['Order'];

    switch (arrGet($_POST, 'type')) {
        case TYPE_ORDER:
            if (validateRequired($data['name'], $data['phone']) && validatePhone($data['phone'])) {
                $lines = array(
                    $data['action'],
                    '',
                    '=== Данные ===',
                    'Имя: ' . trim($data['name']),
                    'Телефон: ' . formatPhone($data['phone']),
                );
                if (sendMail('noreply@' . DOMAIN, config('receivers'), 'Заявка с сайта ' . DOMAIN, $lines)) {
                    response('Письмо успешно отправлено');
                }
            }
            break;
        case TYPE_CALC:
            if (validateRequired($data['name'], $data['phone']) && validatePhone($data['phone'])) {
                $lines = array(
                    'Имя: ' . trim($data['name']),
                    'Телефон: ' . formatPhone($data['phone']),
                    'Модель авто: ' . trim($data['model']),
                    'Описание: ' . trim($data['description']),
                );

                $filePath = $fileName = null;
                if (!empty($_FILES['Order']['tmp_name']['file'])) {
                    $filePath = $_FILES['Order']['tmp_name']['file'];
                    $fileName = $_FILES['Order']['name']['file'];

                    if (!validateFile($fileName, $_FILES['Order']['size']['file'], $_FILES['Order']['type']['file'])) {
                        response('Неверный формат файла', true);
                    }
                }

                if (sendMail('noreply@' . DOMAIN, config('receivers'), 'Заявка с сайта ' . DOMAIN, $lines, $filePath, $fileName)) {
                    response('Заявка успешно отправлена');
                }
            }
            break;
    }

    response('Ошибка', true);
}

require_once 'view.php';