!function(){var e=function(e){for(var t=function(e){for(var t=e.childNodes,n=t.length,r=[],i,a,l,o,d=0;n>d;d++)i=t[d],1===i.nodeType&&(a=i.children[0],l=a.getAttribute("data-size").split("x"),o={src:a.getAttribute("href"),w:parseInt(l[0],10),h:parseInt(l[1],10)},i.children.length>1&&(o.title=i.children[1].innerHTML),a.children.length>0,o.el=i,r.push(o));return r},n=function p(e,t){return e&&(t(e)?e:p(e.parentNode,t))},r=function(e){e=e||window.event,e.preventDefault?e.preventDefault():e.returnValue=!1;var t=e.target||e.srcElement,r=n(t,function(e){return e.tagName&&"DIV"===e.tagName.toUpperCase()});if(r){for(var i=r.parentNode,l=r.parentNode.childNodes,o=l.length,d=0,u,p=0;o>p;p++)if(1===l[p].nodeType){if(l[p]===r){u=d;break}d++}return u>=0&&a(u,i),!1}},i=function(){var e=window.location.hash.substring(1),t={};if(e.length<5)return t;for(var n=e.split("&"),r=0;r<n.length;r++)if(n[r]){var i=n[r].split("=");i.length<2||(t[i[0]]=i[1])}return t.gid&&(t.gid=parseInt(t.gid,10)),t},a=function(e,n,r,i){var a=document.querySelectorAll(".pswp")[0],l,o,d;if(d=t(n),o={galleryUID:n.getAttribute("data-pswp-uid"),showHideOpacity:!0,getThumbBoundsFn:!1},i)if(o.galleryPIDs){for(var u=0;u<d.length;u++)if(d[u].pid==e){o.index=u;break}}else o.index=parseInt(e,10)-1;else o.index=parseInt(e,10);isNaN(o.index)||(r&&(o.showAnimationDuration=0),l=new PhotoSwipe(a,PhotoSwipeUI_Default,d,o),l.init())},l=document.querySelectorAll(e),o=0,d=l.length;d>o;o++)l[o].setAttribute("data-pswp-uid",o+1),l[o].onclick=r;var u=i();u.pid&&u.gid&&a(u.pid,l[u.gid-1],!0,!0)};e(".ps-gallery")}();