<a href="#" id="scroll-top"></a>

<div class="alert fade" id="alert-message"></div>

<div class="modal fade" id="order-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-t100"><h4 class="modal-title">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ
                    </h4></div>
            </div>
            <div class="modal-body">
                <form method="post" action="/" class="text-center">
                    <div class="form-group">
                        <input type="text" class="form-control" name="Order[name]" maxlength="100"
                               placeholder="Ваше имя" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control phone-mask" name="Order[phone]"
                               placeholder="Ваш телефон" required pattern="^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$">
                    </div>
                    <input type="hidden" name="Order[action]" class="action" value="">
                    <input type="hidden" name="type" value="<?= TYPE_ORDER ?>">

                    <button type="submit" class="btn btn-warning">Отправить</button>

                    <div class="info">
                        Ваши данные не будут переданы третьим лицам<br>
                        <a href="/policy.docx">Политика конфиденциальности</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="calc-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-t100"><h4 class="modal-title">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        РАСЧЁТ СТОИМОСТИ РЕМОНТА ПО ФОТО
                    </h4></div>
            </div>
            <div class="modal-body">
                <form method="post" action="/" class="text-center" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Order[name]" maxlength="100"
                                       placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control phone-mask" name="Order[phone]"
                                       placeholder="Ваш телефон" required pattern="^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Order[model]" maxlength="100"
                                       placeholder="Модель авто" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="Order[description]" maxlength="1000" rows="5"
                                          placeholder="Опишите тип повреждения" required></textarea>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="type" value="<?= TYPE_CALC ?>">

                    <div class="row">
                        <div class="col-md-6">
                            <label class="file"><input type="file" name="Order[file]" accept="<?= implode(',', config('mimeTypes')) ?>">Прикрепить фото</label>
                            <br>
                            <small class="text-muted file-name"></small>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-warning">Отправить</button>

                            <div class="info">
                                Ваши данные не будут переданы третьим лицам<br>
                                <a href="/policy.docx">Политика конфиденциальности</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="map-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-t100"><h4 class="modal-title">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        РАСПОЛОЖЕНИЕ СТАНЦИИ НА КАРТЕ
                    </h4></div>
            </div>
            <div class="modal-body">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6320f5deffcaf8f28c6e4a3b9d714d51c9b8a32400129050405060d243b40a65&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>

                <div class="gallery">
                    <img src="/images/8.png"><img src="/images/7.png"><img src="/images/6.png"><img src="/images/5.png">
                </div>
            </div>
        </div>
    </div>
</div>