!function(t){var e,i,n,a,o,d,c,r,s,h,l,f,p,g="",b=0,u={},y=[],w=0,m={},v=[],x=null,I=new Image,C=/\.(jpg|gif|png|bmp|jpeg)(.*)?$/i,k=/[^\.]\.(swf)\s*$/i,O=1,j=0,T="",A=!1,S=t.extend(t("<div/>")[0],{prop:0}),D=navigator.userAgent.match(/msie [6]/i)&&!window.XMLHttpRequest,F=function(){i.hide(),I.onerror=I.onload=null,x&&x.abort(),e.empty()},E=function(){return!1===u.onError(y,b,u)?(i.hide(),void(A=!1)):(u.titleShow=!1,u.width="auto",u.height="auto",e.html('<p id="fancybox-error">The requested content cannot be loaded.<br />Please try again later.</p>'),void P())},N=function(t){var e=t.match(/(?:(?:http|https):\/\/)?(?:www\.)?youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)/);if(e)return g="//www.youtube.com/embed/"+e[1],!0;var i=t.match(/(?:(?:http|https):\/\/)?(?:www\.)?vimeo.com\/([0-9]+)/);return i?(g="//player.vimeo.com/video/"+i[1],!0):!1},B=function(){var n,a,o,c,r,s,h=y[b];if(F(),u=t.extend({},t.fn.fancybox.defaults,"undefined"==typeof t(h).data("fancybox")?u:t(h).data("fancybox")),s=u.onStart(y,b,u),s===!1)return void(A=!1);if("object"==typeof s&&(u=t.extend(u,s)),o=u.title||(h.nodeName?t(h).attr("title"):h.title)||"",h.nodeName&&!u.orig&&(u.orig=t(h).children("img:first").length?t(h).children("img:first"):t(h)),""===o&&u.orig&&u.titleFromAlt&&(o=u.orig.attr("alt")),n=u.href||(h.nodeName?t(h).attr("href"):h.href)||null,(/^(?:javascript)/i.test(n)||"#"==n)&&(n=null),u.type?(a=u.type,n||(n=u.content)):u.content?a="html":n&&(a=n.match(C)?"image":n.match(k)?"swf":t(h).hasClass("iframe")||N(t(h).attr("href"))?"iframe":0===n.indexOf("#")?"inline":"ajax"),!a)return void E();switch("inline"==a&&(h=n.substr(n.indexOf("#")),a=t(h).length>0?"inline":"ajax"),u.type=a,u.href=n,u.title=o,u.autoDimensions&&("html"==u.type||"inline"==u.type||"ajax"==u.type?(u.width="auto",u.height="auto"):u.autoDimensions=!1),u.modal&&(u.overlayShow=!0,u.hideOnOverlayClick=!1,u.hideOnContentClick=!1,u.enableEscapeButton=!1,u.showCloseButton=!1),u.padding=parseInt(u.padding,10),u.margin=parseInt(u.margin,10),e.css("padding",u.padding+u.margin),t(".fancybox-inline-tmp").unbind("fancybox-cancel").bind("fancybox-change",function(){t(this).replaceWith(d.children())}),a){case"html":e.html(u.content),P();break;case"inline":if(t(h).parent().is("#fancybox-content")===!0)return void(A=!1);t('<div class="fancybox-inline-tmp" />').hide().insertBefore(t(h)).bind("fancybox-cleanup",function(){t(this).replaceWith(d.children())}).bind("fancybox-cancel",function(){t(this).replaceWith(e.children())}),t(h).appendTo(e),P();break;case"image":A=!1,t.fancybox.showActivity(),I=new Image,I.onerror=function(){E()},I.onload=function(){A=!0,I.onerror=I.onload=null,L()},I.src=n;break;case"swf":u.scrolling="no",c='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+u.width+'" height="'+u.height+'"><param name="movie" value="'+n+'"></param>',r="",t.each(u.swf,function(t,e){c+='<param name="'+t+'" value="'+e+'"></param>',r+=" "+t+'="'+e+'"'}),c+='<embed src="'+n+'" type="application/x-shockwave-flash" width="'+u.width+'" height="'+u.height+'"'+r+"></embed></object>",e.html(c),P();break;case"ajax":A=!1,t.fancybox.showActivity(),u.ajax.win=u.ajax.success,x=t.ajax(t.extend({},u.ajax,{url:n,data:u.ajax.data||{},error:function(t,e,i){t.status>0&&E()},success:function(t,a,o){var d="object"==typeof o?o:x;if(200==d.status){if("function"==typeof u.ajax.win){if(s=u.ajax.win(n,t,a,o),s===!1)return void i.hide();("string"==typeof s||"object"==typeof s)&&(t=s)}e.html(t),P()}}}));break;case"iframe":M()}},P=function(){var i=u.width,n=u.height;i=i.toString().indexOf("%")>-1?parseInt((t(window).width()-2*u.margin)*parseFloat(i)/100,10)+"px":"auto"==i?"auto":i+"px",n=n.toString().indexOf("%")>-1?parseInt((t(window).height()-2*u.margin)*parseFloat(n)/100,10)+"px":"auto"==n?"auto":n+"px",e.wrapInner('<div style="width:'+i+";height:"+n+";overflow: "+("auto"==u.scrolling?"auto":"yes"==u.scrolling?"scroll":"hidden")+';position:relative;"></div>'),u.width=e.width(),u.height=e.height(),M()},L=function(){u.width=I.width,u.height=I.height,t("<img />").attr({id:"fancybox-img",src:I.src,alt:u.title}).appendTo(e),M()},M=function(){var o,l;return i.hide(),a.is(":visible")&&!1===m.onCleanup(v,w,m)?(t.event.trigger("fancybox-cancel"),void(A=!1)):(A=!0,t(d.add(n)).unbind(),t(window).unbind("resize.fb scroll.fb"),t(document).unbind("keydown.fb"),a.is(":visible")&&"outside"!==m.titlePosition&&a.css("height",a.height()),v=y,w=b,m=u,m.overlayShow?(n.css({"background-color":m.overlayColor,opacity:m.overlayOpacity,cursor:m.hideOnOverlayClick?"pointer":"auto",height:t(document).height()}),n.is(":visible")||(D&&t("select:not(#fancybox-tmp select)").filter(function(){return"hidden"!==this.style.visibility}).css({visibility:"hidden"}).one("fancybox-cleanup",function(){this.style.visibility="inherit"}),n.show())):n.hide(),p=X(),H(),a.is(":visible")?(t(c.add(s).add(h)).hide(),o=a.position(),f={top:o.top,left:o.left,width:a.width(),height:a.height()},l=f.width==p.width&&f.height==p.height,void d.fadeTo(m.changeFade,.3,function(){var i=function(){d.html(e.contents()).fadeTo(m.changeFade,1,K)};t.event.trigger("fancybox-change"),d.empty().removeAttr("filter").css({"border-width":m.padding,width:p.width-2*m.padding,height:u.autoDimensions?"auto":p.height-j-2*m.padding}),l?i():(S.prop=0,t(S).animate({prop:1},{duration:m.changeSpeed,easing:m.easingChange,step:q,complete:i}))})):(a.removeAttr("style"),d.css("border-width",m.padding),"elastic"==m.transitionIn?(f=U(),d.html(e.contents()),a.show(),m.opacity&&(p.opacity=0),S.prop=0,void t(S).animate({prop:1},{duration:m.speedIn,easing:m.easingIn,step:q,complete:K})):("inside"==m.titlePosition&&j>0&&r.show(),d.css({width:p.width-2*m.padding,height:u.autoDimensions?"auto":p.height-j-2*m.padding}).html(e.contents()),void a.css(p).fadeIn("none"==m.transitionIn?0:m.speedIn,K))))},z=function(t){return t&&t.length?"float"==m.titlePosition?'<table id="fancybox-title-float-wrap" cellpadding="0" cellspacing="0"><tr><td id="fancybox-title-float-left"></td><td id="fancybox-title-float-main">'+t+'</td><td id="fancybox-title-float-right"></td></tr></table>':'<div id="fancybox-title-'+m.titlePosition+'">'+t+"</div>":!1},H=function(){if(T=m.title||"",j=0,r.empty().removeAttr("style").removeClass(),m.titleShow===!1)return void r.hide();if(T=t.isFunction(m.titleFormat)?m.titleFormat(T,v,w,m):z(T),!T||""===T)return void r.hide();switch(r.addClass("fancybox-title-"+m.titlePosition).html(T).appendTo("body").show(),m.titlePosition){case"inside":r.css({width:p.width-2*m.padding,marginLeft:m.padding,marginRight:m.padding}),j=r.outerHeight(!0),r.appendTo(o),p.height+=j;break;case"over":r.css({marginLeft:m.padding,width:p.width-2*m.padding,bottom:m.padding}).appendTo(o);break;case"float":r.css("left",-1*parseInt((r.width()-p.width-40)/2,10)).appendTo(a);break;default:r.css({width:p.width-2*m.padding,paddingLeft:m.padding,paddingRight:m.padding}).appendTo(a)}r.hide()},R=function(){return(m.enableEscapeButton||m.enableKeyboardNav)&&t(document).bind("keydown.fb",function(e){27==e.keyCode&&m.enableEscapeButton?(e.preventDefault(),t.fancybox.close()):37!=e.keyCode&&39!=e.keyCode||!m.enableKeyboardNav||"INPUT"===e.target.tagName||"TEXTAREA"===e.target.tagName||"SELECT"===e.target.tagName||(e.preventDefault(),t.fancybox[37==e.keyCode?"prev":"next"]())}),m.showNavArrows?((m.cyclic&&v.length>1||0!==w)&&s.show(),void((m.cyclic&&v.length>1||w!=v.length-1)&&h.show())):(s.hide(),void h.hide())},K=function(){t.support.opacity||(d.get(0).style.removeAttribute("filter"),a.get(0).style.removeAttribute("filter")),u.autoDimensions&&d.css("height","auto"),a.css("height","auto"),T&&T.length&&r.show(),m.showCloseButton&&c.show(),R(),m.hideOnContentClick&&d.bind("click",t.fancybox.close),m.hideOnOverlayClick&&n.bind("click",t.fancybox.close),t(window).bind("resize.fb",t.fancybox.resize),m.centerOnScroll&&t(window).bind("scroll.fb",t.fancybox.center),"iframe"==m.type&&(t('<iframe id="fancybox-frame" name="fancybox-frame'+(new Date).getTime()+'" frameborder="0" hspace="0" '+(t.browser.msie?'allowtransparency="true""':"")+' scrolling="'+u.scrolling+'" src="'+(""!==g?g:m.href)+'"></iframe>').appendTo(d),g=""),a.show(),A=!1,t.fancybox.center(),m.onComplete(v,w,m),W()},W=function(){var t,e;v.length-1>w&&(t=v[w+1].href,"undefined"!=typeof t&&t.match(C)&&(e=new Image,e.src=t)),w>0&&(t=v[w-1].href,"undefined"!=typeof t&&t.match(C)&&(e=new Image,e.src=t))},q=function(t){var e={width:parseInt(f.width+(p.width-f.width)*t,10),height:parseInt(f.height+(p.height-f.height)*t,10),top:parseInt(f.top+(p.top-f.top)*t,10),left:parseInt(f.left+(p.left-f.left)*t,10)};"undefined"!=typeof p.opacity&&(e.opacity=.5>t?.5:t),a.css(e),d.css({width:e.width-2*m.padding,height:e.height-j*t-2*m.padding})},Q=function(){return[t(window).width()-2*m.margin,t(window).height()-2*m.margin,t(document).scrollLeft()+m.margin,t(document).scrollTop()+m.margin]},X=function(){var t,e=Q(),i={},n=m.autoScale,a=2*m.padding;return m.width.toString().indexOf("%")>-1?i.width=parseInt(e[0]*parseFloat(m.width)/100,10):i.width=m.width+a,m.height.toString().indexOf("%")>-1?i.height=parseInt(e[1]*parseFloat(m.height)/100,10):i.height=m.height+a,n&&(i.width>e[0]||i.height>e[1])&&("image"==u.type||"swf"==u.type?(t=m.width/m.height,i.width>e[0]&&(i.width=e[0],i.height=parseInt((i.width-a)/t+a,10)),i.height>e[1]&&(i.height=e[1],i.width=parseInt((i.height-a)*t+a,10))):(i.width=Math.min(i.width,e[0]),i.height=Math.min(i.height,e[1]))),i.top=parseInt(Math.max(e[3]-20,e[3]+.5*(e[1]-i.height-40)),10),i.left=parseInt(Math.max(e[2]-20,e[2]+.5*(e[0]-i.width-40)),10),i},$=function(t){var e=t.offset();return e.top+=parseInt(t.css("paddingTop"),10)||0,e.left+=parseInt(t.css("paddingLeft"),10)||0,e.top+=parseInt(t.css("border-top-width"),10)||0,e.left+=parseInt(t.css("border-left-width"),10)||0,e.width=t.width(),e.height=t.height(),e},U=function(){var e,i,n=u.orig?t(u.orig):!1,a={};return n&&n.length?(e=$(n),a={width:e.width+2*m.padding,height:e.height+2*m.padding,top:e.top-m.padding-20,left:e.left-m.padding-20}):(i=Q(),a={width:2*m.padding,height:2*m.padding,top:parseInt(i[3]+.5*i[1],10),left:parseInt(i[2]+.5*i[0],10)}),a},Z=function(){return i.is(":visible")?(t("div",i).css("top",-40*O+"px"),void(O=(O+1)%12)):void clearInterval(l)};t.fn.fancybox=function(e){return t(this).length?(t(this).data("fancybox",t.extend({},e,t.metadata?t(this).metadata():{})).unbind("click.fb").bind("click.fb",function(e){if(e.preventDefault(),!A){A=!0,t(this).blur(),y=[],b=0;var i=t(this).attr("rel")||t(this).data("rel");i&&""!=i&&"nofollow"!==i?(y=t('a[rel="'+i+'"], area[rel="'+i+'"], a[data-rel="'+i+'"]'),b=y.index(this)):y.push(this),B()}}),this):this},t.fancybox=function(e){var i;if(!A){if(A=!0,i="undefined"!=typeof arguments[1]?arguments[1]:{},y=[],b=parseInt(i.index,10)||0,t.isArray(e)){for(var n=0,a=e.length;a>n;n++)"object"==typeof e[n]?t(e[n]).data("fancybox",t.extend({},i,e[n])):e[n]=t({}).data("fancybox",t.extend({content:e[n]},i));y=jQuery.merge(y,e)}else"object"==typeof e?t(e).data("fancybox",t.extend({},i,e)):e=t({}).data("fancybox",t.extend({content:e},i)),y.push(e);(b>y.length||0>b)&&(b=0),B()}},t.fancybox.showActivity=function(){clearInterval(l),i.show(),l=setInterval(Z,66)},t.fancybox.hideActivity=function(){i.hide()},t.fancybox.next=function(){return t.fancybox.pos(w+1)},t.fancybox.prev=function(){return t.fancybox.pos(w-1)},t.fancybox.pos=function(t){A||(t=parseInt(t),y=v,t>-1&&t<v.length?(b=t,B()):m.cyclic&&v.length>1&&(b=t>=v.length?0:v.length-1,B()))},t.fancybox.cancel=function(){A||(A=!0,t.event.trigger("fancybox-cancel"),F(),u.onCancel(y,b,u),A=!1)},t.fancybox.close=function(){function e(){n.fadeOut("fast"),r.empty().hide(),a.hide(),t.event.trigger("fancybox-cleanup"),d.empty(),m.onClosed(v,w,m),v=u=[],w=b=0,m=u={},A=!1}if(!A&&!a.is(":hidden")){if(A=!0,m&&!1===m.onCleanup(v,w,m))return void(A=!1);if(F(),t(c.add(s).add(h)).hide(),t(d.add(n)).unbind(),t(window).unbind("resize.fb scroll.fb"),t(document).unbind("keydown.fb"),d.find("iframe").attr("src",D&&/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank"),"inside"!==m.titlePosition&&r.empty(),a.stop(),"elastic"==m.transitionOut){f=U();var i=a.position();p={top:i.top,left:i.left,width:a.width(),height:a.height()},m.opacity&&(p.opacity=1),r.empty().hide(),S.prop=1,t(S).animate({prop:0},{duration:m.speedOut,easing:m.easingOut,step:q,complete:e})}else a.fadeOut("none"==m.transitionOut?0:m.speedOut,e)}},t.fancybox.resize=function(){n.is(":visible")&&n.css("height",t(document).height()),t.fancybox.center(!0)},t.fancybox.center=function(){var t,e;A||(e=arguments[0]===!0?1:0,t=Q(),(e||!(a.width()>t[0]||a.height()>t[1]))&&a.stop().animate({top:parseInt(Math.max(t[3]-20,t[3]+.5*(t[1]-d.height()-40)-m.padding)),left:parseInt(Math.max(t[2]-20,t[2]+.5*(t[0]-d.width()-40)-m.padding))},"number"==typeof arguments[0]?arguments[0]:200))},t.fancybox.init=function(){t("#fancybox-wrap").length||(t("body").append(e=t('<div id="fancybox-tmp"></div>'),i=t('<div id="fancybox-loading"><div></div></div>'),n=t('<div id="fancybox-overlay"></div>'),a=t('<div id="fancybox-wrap"></div>')),o=t('<div id="fancybox-outer"></div>').append('<div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div>').appendTo(a),o.append(d=t('<div id="fancybox-content"></div>'),c=t('<a id="fancybox-close"></a>'),r=t('<div id="fancybox-title"></div>'),s=t('<a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a>'),h=t('<a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a>')),c.click(t.fancybox.close),i.click(t.fancybox.cancel),s.click(function(e){e.preventDefault(),t.fancybox.prev()}),h.click(function(e){e.preventDefault(),t.fancybox.next()}),t.fn.mousewheel&&a.bind("mousewheel.fb",function(e,i){A?e.preventDefault():(0==t(e.target).get(0).clientHeight||t(e.target).get(0).scrollHeight===t(e.target).get(0).clientHeight)&&(e.preventDefault(),t.fancybox[i>0?"prev":"next"]())}),t.support.opacity||a.addClass("fancybox-ie"),D&&(i.addClass("fancybox-ie6"),a.addClass("fancybox-ie6"),t('<iframe id="fancybox-hide-sel-frame" src="'+(/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank")+'" scrolling="no" border="0" frameborder="0" tabindex="-1"></iframe>').prependTo(o)))},t.fn.fancybox.defaults={padding:10,margin:40,opacity:!1,modal:!1,cyclic:!1,scrolling:"auto",width:560,height:340,autoScale:!0,autoDimensions:!0,centerOnScroll:!1,ajax:{},swf:{wmode:"transparent"},hideOnOverlayClick:!0,hideOnContentClick:!1,overlayShow:!0,overlayOpacity:.7,overlayColor:"#777",titleShow:!0,titlePosition:"float",titleFormat:null,titleFromAlt:!1,transitionIn:"fade",transitionOut:"fade",speedIn:300,speedOut:300,changeSpeed:300,changeFade:"fast",easingIn:"swing",easingOut:"swing",showCloseButton:!0,showNavArrows:!0,enableEscapeButton:!0,enableKeyboardNav:!0,onStart:function(){},onCancel:function(){},onComplete:function(){},onCleanup:function(){},onClosed:function(){},onError:function(){}},t(document).ready(function(){t.fancybox.init()})}(jQuery);