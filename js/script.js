jQuery(function ($) {
    $(window).on('load scroll', function () {
        var windowHeight = $(window).height(),
            scrollTop = $(window).scrollTop();
        $('.animate .zoom, .animate .slide-top, .animate .spinner').filter(':not(.in)').each(function () {
            var top = $(this).offset().top,
                bottom = top + $(this).height(),
                scrollBottom = scrollTop + windowHeight;
            if (top > scrollTop && top < scrollBottom || bottom > scrollTop && bottom < scrollBottom) {
                $(this).addClass('in');
            }
        });
        $('#scroll-top').toggleClass('in', scrollTop > windowHeight / 2);
        $('#transparent-layout').addClass('in');
    });

    $('#screen-examples .swiper-container').swiper({
        prevButton: '#screen-examples .slide-prev',
        nextButton: '#screen-examples .slide-next',
        pagination: '#screen-examples .swiper-pagination',
        paginationClickable: true
    });

    var inProcess = false;

    $('#screen-1 .tag').on('mouseover', function() {
        var $cont = $('#screen-1 .description'),
            $els = $cont.children(),
            $el = $els.eq($(this).index());

        if ($el.height() > $cont.height()) {
            $cont.css('min-height', $el.height());
        }

        if (!inProcess) {
            inProcess = true;
            $els.fadeOut(0);
            $el.fadeIn(100, function () {
                inProcess = false;
            });
        }
    });

    $('#screen-2 .show-all').on('click', function () {
        $('#screen-2 .hidden-boxes').slideDown(200);
        $(this).slideUp(200);
        return false;
    });

    $(window).on('load resize', function () {
        //$('#screen-0 .box').equalHeight();
        $('#screen-examples .box').equalHeight();
        $('#screen-reviews .box-row > div').equalHeight();
    });

    $('.fancy').fancybox();

    $('.phone-mask').mask('+7 (999) 999-99-99');

    $('.modal').on('shown.bs.modal', function () {
        var $dialog = $(this).find('.modal-dialog');
        $dialog.css('transform', 'translateY(' + Math.round(($(window).height() - $dialog.height()) / 2) + 'px)');
    });

    $('#calc-modal .file input').on('change', function () {
        $(this).parent().siblings('.file-name').text($(this).val().replace(/.*\\/, ''));
    });

    $('#order-modal, #calc-modal')
        .on('show.bs.modal', function (e) {
            var $form = $(this).find('form');

            $form[0].reset();
            $form.find('.file-name').text('');

            var $button = $(e.relatedTarget);
            $(this)
                .removeClass('loading')
                .find('input.action')
                .val($button.data('action') || $button.text());
        })
        .on('submit', 'form', function (e) {
            var $this = $(this),
                $modal = $this.parents('.modal').addClass('loading'),
                formData = new FormData($this[0]),
                $file = $this.find('[name="Order[file]"]');

            if ($file.length) {
                formData.append($file.attr('name'), $file[0].files);
            }

            $.ajax({
                url: '/',
                type: 'POST',
                dataType : 'json',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(data){
                    var $alert = $('#alert-message')
                        .toggleClass('alert-danger', data.error)
                        .toggleClass('alert-success', !data.error)
                        .html(data.message)
                        .fadeIn(100);

                    setTimeout(function () {
                        $alert.fadeOut(500);
                    }, 5000);

                    $this[0].reset();
                    $modal.modal('hide');
                }
            });
            e.preventDefault();
        });
});