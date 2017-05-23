
/*$('#open_user_data').unbind('click'),*/
$('#open_user_data').on('click', function ()
{
   return function () {
                    return $('#user-data').hasClass('open') ? $('#user-data').removeClass('open', function ()
                                                                                                 {
                                                                                                   return $('.main-nav li').css('opacity', 0)
                                                                                         })  : ($('#user-data').addClass('open'), $('#user-data').attr('data-open', 'true'))
                      }
}()),

/*window.started || o(),
parseInt(h) > 0 && a.badge(h),
*/

$('#open_user_data').length && $('#open_user_data').hasClass('tcon-transform') && ($('#open_user_data').removeClass('tcon-transform'), $('#user-data').removeClass('open', function () {
return $('.main-nav li').css('opacity', 0)
})),
$('#body').click(function () {
if ($('#user-data').hasClass('open') && ($('#open_user_data').removeClass('tcon-transform'), $('#user-data').removeClass('open', function () {
return $('.main-nav li').css('opacity', 0)
})), $('#notifications_container').hasClass('open')) return $('#notifications_container').removeClass('open'),
$('#get_notifications').attr('data-remote', !0)
})
