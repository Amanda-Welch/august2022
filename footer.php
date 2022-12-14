<footer>
        <div id="footer-wrapper">
            <ul>
                <a href="index.php"><li class="footer-menu">HOME</li></a> <span class="symbol">&#x2022</span>
                <a href="portfolio.php"><li class="footer-menu">PORTFOLIO</li></a> <span class="symbol">&#x2022</span>
                <a href="contact.php"><li class="footer-menu">CONTACT</li></a>
            </ul>
            <p>Let's Chat!</p>
            <div>
                <a href="http://www.facebook.com" target="_blank">
                    <svg class="icon"><use xlink:href="#icon-facebook2"></use></svg>
                </a>
                <a href="http://www.instagram.com" target="_blank">
                    <svg class="icon"><use xlink:href="#icon-instagram"></use></svg>
                </a>
                <a href="http://www.behance.net" target="_blank">
                    <svg class="icon"><use xlink:href="#icon-behance2"></use></svg>
                </a>
            </div>
        </div>
        <p id="copy">Copyright &copy; 2022 Amanda Welch Creations</p>
    </footer>

    <script>
        !function(a,b){"function"==typeof define&&define.amd?define([],function(){return a.svg4everybody=b()}):"object"==typeof module&&module.exports?module.exports=b():a.svg4everybody=b()}(this,function(){function a(a,b,c,d){if(c){var e=document.createDocumentFragment(),f=!b.hasAttribute("viewBox")&&c.getAttribute("viewBox");f&&b.setAttribute("viewBox",f);for(var g=document.importNode?document.importNode(c,!0):c.cloneNode(!0),h=document.createElementNS(b.namespaceURI||"http://www.w3.org/2000/svg","g");g.childNodes.length;)h.appendChild(g.firstChild);if(d)for(var i=0;d.attributes.length>i;i++){var j=d.attributes[i];"xlink:href"!==j.name&&"href"!==j.name&&h.setAttribute(j.name,j.value)}e.appendChild(h),a.appendChild(e)}}function b(b,c){b.onreadystatechange=function(){if(4===b.readyState){var d=b._cachedDocument;d||(d=b._cachedDocument=document.implementation.createHTMLDocument(""),d.body.innerHTML=b.responseText,b._cachedTarget={}),b._embeds.splice(0).map(function(e){var f=b._cachedTarget[e.id];f||(f=b._cachedTarget[e.id]=d.getElementById(e.id)),a(e.parent,e.svg,f,c)})}},b.onreadystatechange()}function c(c){function e(){for(var c=0;c<r.length;){var j=r[c],k=j.parentNode,l=d(k);if(l){var m=j.getAttribute("xlink:href")||j.getAttribute("href");if(f){var n=document.createElement("img");n.style.cssText="display:inline-block;height:100%;width:100%",n.setAttribute("width",l.getAttribute("width")||l.clientWidth),n.setAttribute("height",l.getAttribute("height")||l.clientHeight),n.src=g(m,l,j),k.replaceChild(n,j)}else if(i)if(!h.validate||h.validate(m,l,j)){k.removeChild(j);var o=m.split("#"),t=o.shift(),u=o.join("#");if(t.length){var v=p[t];v||(v=p[t]=new XMLHttpRequest,v.open("GET",t),v.send(),v._embeds=[]),v._embeds.push({parent:k,svg:l,id:u}),b(v,j)}else a(k,l,document.getElementById(u),j)}else++c,++s}else++c}(!r.length||r.length-s>0)&&q(e,67)}var f,g,h=Object(c);g=h.fallback||function(a){return a.replace(/\?[^#]+/,"").replace("#",".").replace(/^\./,"")+".png"+(/\?[^#]+/.exec(a)||[""])[0]},f="nosvg"in h?h.nosvg:/\bMSIE [1-8]\b/.test(navigator.userAgent),f&&(document.createElement("svg"),document.createElement("use"));var i,j=/\bMSIE [1-8]\.0\b/,k=/\bTrident\/[567]\b|\bMSIE (?:9|10)\.0\b/,l=/\bAppleWebKit\/(\d+)\b/,m=/\bEdge\/12\.(\d+)\b/,n=/\bEdge\/.(\d+)\b/,o=window.top!==window.self;i="polyfill"in h?h.polyfill:j.test(navigator.userAgent)||k.test(navigator.userAgent)||(navigator.userAgent.match(m)||[])[1]<10547||(navigator.userAgent.match(l)||[])[1]<537||n.test(navigator.userAgent)&&o;var p={},q=window.requestAnimationFrame||setTimeout,r=document.getElementsByTagName("use"),s=0;i&&e()}function d(a){for(var b=a;"svg"!==b.nodeName.toLowerCase()&&(b=b.parentNode););return b}return c});
    </script>

     <style type="text/css">
         .svg-sprite {display: none;}
     </style>
     <script type="text/javascript">
         var ajax = new XMLHttpRequest();
         ajax.open("GET", "SVG/icons.svg", true);
         ajax.send();
         ajax.onload = function(e) {
             var div = document.createElement("div");
                div.className = "svg-sprite";
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.firstChild);
         }
     </script>


</body>
</html>