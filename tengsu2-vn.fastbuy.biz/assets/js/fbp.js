class Mfb {
  constructor(obj) { this._obj = obj }
  get run() {
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    this._obj.fbi.forEach(init => { 
      fbq('init', init);
      $('body').append(`<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=${init}&ev=PageView&noscript=1"></noscript>`);
    });
    fbq('track', "PageView");
    if(this._obj.purchase)  fbq('track', "Purchase");
  }
}
new Mfb({
  fbi : [1002343070132039,1114096082260498,1737782516346483, 460173441348244],
  purchase : document.URL.search("thankyou.php") !== -1 ?  true : false ,
}).run;