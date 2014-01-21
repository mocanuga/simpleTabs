<?php
/**
 * Created by IntelliJ IDEA.
 * User: adi
 * Date: 11/11/13
 * Time: 5:13 PM
 * To change this template use File | Settings | File Templates.
 */ ?>
<?php error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html>
<head>
    <title>jQuery PLUGINS</title>
    <style type="text/css" media="screen">
        #wrapper {position: relative;}
        .wrapper {border: 1px solid #ccc;display: block;margin: 40px auto 0;overflow: auto;width: 60%;}
        .content {clear: both;padding: 15px;}
            .heading {clear: both;display: block;margin: 0 0 -1px;overflow: auto;}
                .heading a {border-color: #ccc #ccc transparent;border-style: solid;border-width: 1px 1px 0;color: steelblue;display: block; float: left;font-weight: bold;margin: 0 5px 0 0;padding: 15px;text-decoration: none;}
                .heading a.active, .heading a:hover {background: #efefef;color: #000;}
            .body {background: #efefef;border:1px solid #ccc;overflow: auto;}
                .body .tab > form {display: block; float: left;}
                .body .tab > form input[type="text"], .body .tab > form input[type="password"], .body .tab > form input[type="submit"] {clear: both;display: block;margin: 10px 40px;width: 270px;}
                .body .tab > form input.error {border-color: #f00!important;}
                .body .tab > form input[type="text"], .content .tab > form input[type="password"] {border: 1px solid #ccc;padding: 5px;}
                .body .tab > form input[type="checkbox"] {clear: left;display: block;float: left;margin: 5px 5px 5px 40px}
                .body .tab > form input[type="submit"] {background: #f00;border: 0 none;color: #fff;cursor: pointer;font-weight: bold;padding: 5px 10px;}
                .body .tab > form label {clear: right;color: #555;display: block;float: left;font-size: x-small;line-height: 22px;}
                .body .tab > form label a {color: steelblue;text-decoration: none;}
                .error {color: #800;font-size: 11px;margin: 0 40px;}
                .body .tab .info {background: #fff;height: 195px;margin: 10px 30px;overflow: auto;}
                .body .tab .info .hints {padding: 10px;}
                .body .tab .info .hints .hint {clear: both;color: #555555;display: block;font-size: 12px;margin: 0 0 13px;padding: 0 0 0 30px;}
                .body .tab .info .hints .hint span {color: #333;font-weight: bold;}
                .body .tab .heading {border-bottom: 1px solid #ccc;padding: 10px;}
                .body .tab .note {font-size: 11px;margin: 5px 0;padding: 0 10px;}
                .body .tab .partnerList {display: block;margin: 0 0 0 50px;}
                .body .tab .partnerList a {background: none repeat scroll 0 0 #FFFFFF;border: 1px solid #CCCCCC;border-radius: 3px;color: #4682B4;display: block;margin: 10px;padding: 5px 10px;text-align: center;text-decoration: none;width: 120px;}
                .body .tab .partnerList a:hover {background: none repeat scroll 0 0 #eee;}
    </style>
</head>
<body>
<div id="wrapper">
    <h1>Plugins list</h1>
    <div class="wrapper">
        <div class="content">
            <div class="heading">
                <a href="" class="register">Register your account</a>
                <a href="" class="active partners">Login with</a>
            </div>
            <div class="body">
                <div class="tab" id="register" style="display: none;">
                    <form action="">
                        <input type="text" class="error" placeholder="Username">
                        <p class="error">Error message</p>
                        <input type="text" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <input type="checkbox" id="agree">
                        <label for="agree">Agree <a href="javascript:;">Terms</a></label>
                        <input type="checkbox" id="age">
                        <label for="age">18 ani</label>
                        <input type="submit" value="Registra ora">
                    </form>
                    <div class="info">
                        <div class="hints">
                            <div class="hint">
                                <span>Free Images.</span> Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah
                            </div>
                            <div class="hint">
                                <span>Free Images.</span> Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah Blah  Blah  Blah  Blah  Blah
                            </div>
                            <div class="hint">
                                <span>Free Images.</span> Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah  Blah
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="partners">
                    <p class="heading">Partners</p>
                    <p class="note">Login with one of our partners</p>
                    <div class="partnerList">
                        <a href="javascript:;" class="facebook">Facebook</a>
                        <a href="javascript:;" class="google">Google</a>
                        <a href="javascript:;" class="linkedin">Linked in</a>
                        <a href="javascript:;" class="twitter">Twitter</a>
                        <a href="javascript:;" class="live">Live</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
/* cookie plugin */
(function ($, document, undefined) {var pluses = /\+/g;function raw(s) {return s;}function decoded(s) {return decodeURIComponent(s.replace(pluses, ' '));}var config = $.cookie = function (key, value, options) {if (value !== undefined) {options = $.extend({}, config.defaults, options);if (value === null) {options.expires = -1;}if (typeof options.expires === 'number') {var days = options.expires, t = options.expires = new Date();t.setDate(t.getDate() + days);}value = config.json ? JSON.stringify(value) : String(value);return (document.cookie = [encodeURIComponent(key), '=', config.raw ? value : encodeURIComponent(value),options.expires ? '; expires=' + options.expires.toUTCString() : '',options.path ? '; path=' + options.path : '',options.domain ? '; domain=' + options.domain : '',options.secure ? '; secure' : ''].join(''));}var decode = config.raw ? raw : decoded;var cookies = document.cookie.split('; ');for (var i = 0, l = cookies.length; i < l; i++) {var parts = cookies[i].split('=');if (decode(parts.shift()) === key) {var cookie = decode(parts.join('='));return config.json ? JSON.parse(cookie) : cookie;}}return null;};config.defaults = {};$.removeCookie = function (key, options) {if ($.cookie(key) !== null) {$.cookie(key, null, options);return true;}return false;};})(jQuery, document);
(function ($) {
    'use strict';
    $.fn.simpleTabs = function (options) {
        var container = this,
            tabLinks = container.find(options.linkContainer || '.tabLinks').find('a'),
            tabs = container.find(options.tabContainer || '.tabs').find('.tab'),
            tmp = 'undefined',
            cache = $.cookie !== undefined ?  $.cookie('simpleTabs') : 0,
            remember = options.remember && $.cookie !== undefined ? options.remember : false, // cookie plugin requirement
            changeTab = function (e) {
                var i = tabLinks.index(e.currentTarget);
                if(tmp != i) { // only for other tabs
                    tmp = i;
                    var activeTab = tabLinks.filter('.active'),
                        newTab = $(e.currentTarget).attr('class').replace(/active/, '').trim();
                    activeTab.removeClass('active');
                    $(e.currentTarget).addClass('active');
                    tabs.stop().filter(':visible').fadeOut(100, function () {
                        tabs.stop().filter('#' + newTab).fadeIn(100);
                        if(remember) {
                            $.cookie('simpleTabs', i);
                        }
                    });
                }
            };
        if (remember && cache !== undefined) {
           changeTab({currentTarget: tabLinks.eq(cache)[0]});
        }
        tabLinks
            .on('mouseenter', function (e) {
                if (options.changeOnHover) {
                    changeTab(e);
                }
            })
            .on('mouseleave', function (e) {
                if (tmp !== 'undefined' && !options.changeOnHover) {
                    tmp = 'undefined';
                }
            });
        if (!options.changeOnHover) {
            tabLinks.on('click', function (e) {
                e.preventDefault();
                changeTab(e);
            });
        }
    };
}(jQuery));
$(function () {
    $('.content').simpleTabs({
        linkContainer: '.heading',
        tabContainer: '.body',
        changeOnHover: false,
        remember: true
    });
});
</script>
</body>
</html>
