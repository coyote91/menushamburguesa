o.on('click', '#toggle-nav', function (t) {
t.preventDefault();
var n = e(this);
n.hasClass('open') ? i.close_menu()  : i.open_menu()
