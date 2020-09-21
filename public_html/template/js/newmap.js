//<![CDATA[
      var gmarkers = [];
      var gicons = [];
      var map = null;
      var markerCluster = null;
var infowindow = new google.maps.InfoWindow(
  {
    //size: new google.maps.Size(150,50)
  });

function createMarker(latlng,name,html,category,image,title) {
    var contentString = html;

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: image,
        title: title
        /*
        shadow: iconShadow,*/
        //zIndex: Math.round(latlng.lat()*-100000)<<5
        });
        marker.mycategory = category;
        marker.myname = name;
        gmarkers.push(marker);

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString);
        infowindow.open(map,marker);
        });
}

      function show(category) {
        for (var i=0; i<gmarkers.length; i++) {
          if (gmarkers[i].mycategory == category) {
            gmarkers[i].setVisible(true);
                markerCluster.addMarker(gmarkers[i]);
                  }
        }
        document.getElementById(category+"box").checked = true;
      }

      function hide(category) {
        for (var i=0; i<gmarkers.length; i++) {
          if (gmarkers[i].mycategory == category) {
            gmarkers[i].setVisible(false);
                    markerCluster.removeMarker(gmarkers[i]); markerCluster.redraw();
                  }
        }
        document.getElementById(category+"box").checked = false;
        infowindow.close();
      }

      function boxclick(box,category) {
        if (box.checked) {
          show(category);
        } else {
          hide(category);
        }
      }

  google.maps.event.addDomListener(window, 'load', initialize);

  function initialize() {
    
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

      var okolo = [
        new google.maps.LatLng(73.967728, -66.383666),
        new google.maps.LatLng(73.967728, 101.663209),
        new google.maps.LatLng(0.866742, 101.663209),
        new google.maps.LatLng(0.866742, -66.383666),
        new google.maps.LatLng(73.967728, -66.383666)
    ];

    var statCR = [new google.maps.LatLng(48.836781,14.968627), new google.maps.LatLng(48.87440099999999,14.973255), new google.maps.LatLng(48.902519,14.993352), new google.maps.LatLng(48.955833,14.976785), new google.maps.LatLng(49.00939600000001,14.990232), new google.maps.LatLng(49.020447,15.021042), new google.maps.LatLng(49.014198,15.064991), new google.maps.LatLng(48.999317,15.066027), new google.maps.LatLng(48.993912,15.154202), new google.maps.LatLng(48.94289799999999,15.189376), new google.maps.LatLng(48.957062,15.209603), new google.maps.LatLng(48.9533,15.261567), new google.maps.LatLng(48.992138,15.289991), new google.maps.LatLng(48.976219,15.321204), new google.maps.LatLng(48.981384,15.36554), new google.maps.LatLng(48.951317,15.424957), new google.maps.LatLng(48.951462,15.468092), new google.maps.LatLng(48.914459,15.513919), new google.maps.LatLng(48.895382,15.578053), new google.maps.LatLng(48.897503,15.613068), new google.maps.LatLng(48.85571300000001,15.68898), new google.maps.LatLng(48.851357,15.753974), new google.maps.LatLng(48.87521,15.780727), new google.maps.LatLng(48.86741300000001,15.852282), new google.maps.LatLng(48.834347,15.894227), new google.maps.LatLng(48.838627,15.917746), new google.maps.LatLng(48.80418800000001,15.950484), new google.maps.LatLng(48.77976600000001,15.994247), new google.maps.LatLng(48.748917,16.080887), new google.maps.LatLng(48.74831400000001,16.152914), new google.maps.LatLng(48.728016,16.359945), new google.maps.LatLng(48.742359,16.408663), new google.maps.LatLng(48.809601,16.463551), new google.maps.LatLng(48.801003,16.525459), new google.maps.LatLng(48.813438,16.54023), new google.maps.LatLng(48.781868,16.593643), new google.maps.LatLng(48.786137,16.644129), new google.maps.LatLng(48.769802,16.676075), new google.maps.LatLng(48.72763100000001,16.682899), new google.maps.LatLng(48.731415,16.747541), new google.maps.LatLng(48.720226,16.752918), new google.maps.LatLng(48.711994,16.77376), new google.maps.LatLng(48.715023,16.905703), new google.maps.LatLng(48.672173,16.921268), new google.maps.LatLng(48.622574,16.918964), new google.maps.LatLng(48.622925,16.955811), new google.maps.LatLng(48.66659199999999,16.968946), new google.maps.LatLng(48.76581600000001,17.044161), new google.maps.LatLng(48.785976,17.088535), new google.maps.LatLng(48.83107400000001,17.110134), new google.maps.LatLng(48.84464999999999,17.153479), new google.maps.LatLng(48.87492,17.193029), new google.maps.LatLng(48.861012,17.27788), new google.maps.LatLng(48.846161,17.32007), new google.maps.LatLng(48.813614,17.361444), new google.maps.LatLng(48.813457,17.396208), new google.maps.LatLng(48.846382,17.451977), new google.maps.LatLng(48.840111,17.482241), new google.maps.LatLng(48.812729,17.520468), new google.maps.LatLng(48.828773,17.595667), new google.maps.LatLng(48.853897,17.630224), new google.maps.LatLng(48.860233,17.703878), new google.maps.LatLng(48.925087,17.781689), new google.maps.LatLng(48.927254,17.885464), new google.maps.LatLng(49.022285,17.932289), new google.maps.LatLng(49.027851,17.992462), new google.maps.LatLng(49.020737,18.022655), new google.maps.LatLng(49.03596499999999,18.066294), new google.maps.LatLng(49.090961,18.115906), new google.maps.LatLng(49.135223,18.107613), new google.maps.LatLng(49.16081999999999,18.137262), new google.maps.LatLng(49.189484,18.131498), new google.maps.LatLng(49.229008,18.156242), new google.maps.LatLng(49.2486,18.147036), new google.maps.LatLng(49.270504,18.184357), new google.maps.LatLng(49.287613,18.184269), new google.maps.LatLng(49.304886,18.299423), new google.maps.LatLng(49.32893,18.377747), new google.maps.LatLng(49.36924,18.415401), new google.maps.LatLng(49.396481,18.404018), new google.maps.LatLng(49.39358099999999,18.449299), new google.maps.LatLng(49.433098,18.490219), new google.maps.LatLng(49.470387,18.547941), new google.maps.LatLng(49.499268,18.545076), new google.maps.LatLng(49.50794999999999,18.569773), new google.maps.LatLng(49.510994,18.596117), new google.maps.LatLng(49.494991,18.61772), new google.maps.LatLng(49.508221,18.674059), new google.maps.LatLng(49.489548,18.75515), new google.maps.LatLng(49.523785,18.83647), new google.maps.LatLng(49.550205,18.859898), new google.maps.LatLng(49.562775,18.837868), new google.maps.LatLng(49.650627,18.806826), new google.maps.LatLng(49.679153,18.80485), new google.maps.LatLng(49.683979,18.717054), new google.maps.LatLng(49.70488,18.709675), new google.maps.LatLng(49.71544599999999,18.637606), new google.maps.LatLng(49.800861,18.594896), new google.maps.LatLng(49.834118,18.570957), new google.maps.LatLng(49.856934,18.605541), new google.maps.LatLng(49.882195,18.566706), new google.maps.LatLng(49.921856,18.574511), new google.maps.LatLng(49.926689,18.545065), new google.maps.LatLng(49.90017700000001,18.530617), new google.maps.LatLng(49.903564,18.491247), new google.maps.LatLng(49.93783200000001,18.432663), new google.maps.LatLng(49.937237,18.368305), new google.maps.LatLng(49.916451,18.321745), new google.maps.LatLng(49.928944,18.290312), new google.maps.LatLng(49.965034,18.2761), new google.maps.LatLng(49.968063,18.221554), new google.maps.LatLng(49.998268,18.206877), new google.maps.LatLng(50.000111,18.172327), new google.maps.LatLng(49.98268099999999,18.154322), new google.maps.LatLng(50.01503399999999,18.093901), new google.maps.LatLng(50.043991,18.089743), new google.maps.LatLng(50.065495,18.033224), new google.maps.LatLng(50.05321899999999,18.004614), new google.maps.LatLng(50.02985000000001,18.010448), new google.maps.LatLng(50.03588499999999,18.044477), new google.maps.LatLng(50.012939,18.04125), new google.maps.LatLng(50.00523800000001,17.953489), new google.maps.LatLng(49.982544,17.924488), new google.maps.LatLng(49.972908,17.869131), new google.maps.LatLng(49.994366,17.828251), new google.maps.LatLng(50.011608,17.824308), new google.maps.LatLng(50.02114099999999,17.777744), new google.maps.LatLng(50.051521,17.770514), new google.maps.LatLng(50.09714900000001,17.731449), new google.maps.LatLng(50.117535,17.683479), new google.maps.LatLng(50.11132,17.650707), new google.maps.LatLng(50.140877,17.611195), new google.maps.LatLng(50.16993,17.601442), new google.maps.LatLng(50.18541,17.705671), new google.maps.LatLng(50.205135,17.717875), new google.maps.LatLng(50.20652799999999,17.75857), new google.maps.LatLng(50.235874,17.765509), new google.maps.LatLng(50.256664,17.725039), new google.maps.LatLng(50.29874,17.752934), new google.maps.LatLng(50.326698,17.686344), new google.maps.LatLng(50.29884300000001,17.685814), new google.maps.LatLng(50.266247,17.611677), new google.maps.LatLng(50.275639,17.49477), new google.maps.LatLng(50.27011100000001,17.455517), new google.maps.LatLng(50.252144,17.440157), new google.maps.LatLng(50.278259,17.420343), new google.maps.LatLng(50.284023,17.338743), new google.maps.LatLng(50.329376,17.348593), new google.maps.LatLng(50.318012,17.289694), new google.maps.LatLng(50.332264,17.248274), new google.maps.LatLng(50.365471,17.200428), new google.maps.LatLng(50.385616,17.204275), new google.maps.LatLng(50.381107,17.14348), new google.maps.LatLng(50.405258,17.111523), new google.maps.LatLng(50.407803,17.053076), new google.maps.LatLng(50.428154,16.998325), new google.maps.LatLng(50.418262,16.974876), new google.maps.LatLng(50.44919599999999,16.907398), new google.maps.LatLng(50.44291299999999,16.880884), new google.maps.LatLng(50.411671,16.860617), new google.maps.LatLng(50.390568,16.906099), new google.maps.LatLng(50.362473,16.914751), new google.maps.LatLng(50.312325,16.952589), new google.maps.LatLng(50.294876,17.00876), new google.maps.LatLng(50.256607,17.001648), new google.maps.LatLng(50.23034299999999,17.028097), new google.maps.LatLng(50.216625,16.997223), new google.maps.LatLng(50.245045,16.975002), new google.maps.LatLng(50.223537,16.955936), new google.maps.LatLng(50.223198,16.898874), new google.maps.LatLng(50.197121,16.872246), new google.maps.LatLng(50.20771800000001,16.848085), new google.maps.LatLng(50.190327,16.81074), new google.maps.LatLng(50.144817,16.78178), new google.maps.LatLng(50.134872,16.744612), new google.maps.LatLng(50.096809,16.706017), new google.maps.LatLng(50.112061,16.632875), new google.maps.LatLng(50.164001,16.562277), new google.maps.LatLng(50.220112,16.558327), new google.maps.LatLng(50.239677,16.523487), new google.maps.LatLng(50.32515,16.430538), new google.maps.LatLng(50.319153,16.400061), new google.maps.LatLng(50.350372,16.361849), new google.maps.LatLng(50.379833,16.359331), new google.maps.LatLng(50.38122899999999,16.299887), new google.maps.LatLng(50.36755400000001,16.278896), new google.maps.LatLng(50.40386600000001,16.253895), new google.maps.LatLng(50.40759700000001,16.221098), new google.maps.LatLng(50.429821,16.196575), new google.maps.LatLng(50.447884,16.20513), new google.maps.LatLng(50.478935,16.294262), new google.maps.LatLng(50.50710300000001,16.317768), new google.maps.LatLng(50.496166,16.344185), new google.maps.LatLng(50.528423,16.401125), new google.maps.LatLng(50.569008,16.405689), new google.maps.LatLng(50.579399,16.446085), new google.maps.LatLng(50.648048,16.364342), new google.maps.LatLng(50.666924,16.321857), new google.maps.LatLng(50.67107,16.232822), new google.maps.LatLng(50.633045,16.216215), new google.maps.LatLng(50.628925,16.179558), new google.maps.LatLng(50.646015,16.17041), new google.maps.LatLng(50.662144,16.099983), new google.maps.LatLng(50.63998399999999,16.066603), new google.maps.LatLng(50.61032900000001,16.055748), new google.maps.LatLng(50.599026,16.025114), new google.maps.LatLng(50.60993600000001,15.992436), new google.maps.LatLng(50.63490699999999,16.008427), new google.maps.LatLng(50.68526499999999,15.98988), new google.maps.LatLng(50.692165,15.964299), new google.maps.LatLng(50.67479299999999,15.862001), new google.maps.LatLng(50.708946,15.851497), new google.maps.LatLng(50.755505,15.816414), new google.maps.LatLng(50.742844,15.77948), new google.maps.LatLng(50.737301,15.705055), new google.maps.LatLng(50.75468799999999,15.680647), new google.maps.LatLng(50.778763,15.578604), new google.maps.LatLng(50.776546,15.52405), new google.maps.LatLng(50.80666,15.425137), new google.maps.LatLng(50.777264,15.374433), new google.maps.LatLng(50.83771500000001,15.368011), new google.maps.LatLng(50.85200500000001,15.353951), new google.maps.LatLng(50.862675,15.309048), new google.maps.LatLng(50.888897,15.279805), new google.maps.LatLng(50.93214,15.268016), new google.maps.LatLng(50.95319000000001,15.29252), new google.maps.LatLng(50.998703,15.239114), new google.maps.LatLng(50.98862499999999,15.175542), new google.maps.LatLng(51.020298,15.171984), new google.maps.LatLng(50.990475,15.12853), new google.maps.LatLng(51.01240200000001,15.102679), new google.maps.LatLng(51.010872,14.985001), new google.maps.LatLng(50.99046300000001,14.968146), new google.maps.LatLng(50.98581699999999,15.005354), new google.maps.LatLng(50.94072,15.013517), new google.maps.LatLng(50.922108,14.989576), new google.maps.LatLng(50.868851,15.002059), new google.maps.LatLng(50.862064,14.959641), new google.maps.LatLng(50.87594599999999,14.900141), new google.maps.LatLng(50.872952,14.82983), new google.maps.LatLng(50.82505799999999,14.801635), new google.maps.LatLng(50.822266,14.722139), new google.maps.LatLng(50.840534,14.708775), new google.maps.LatLng(50.85751000000001,14.618798), new google.maps.LatLng(50.931011,14.650105), new google.maps.LatLng(50.913239,14.581554), new google.maps.LatLng(50.92499900000001,14.560865), new google.maps.LatLng(50.962681,14.595665), new google.maps.LatLng(50.987453,14.598656), new google.maps.LatLng(51.01689900000001,14.531834), new google.maps.LatLng(51.035564,14.45372), new google.maps.LatLng(51.019295,14.421128), new google.maps.LatLng(51.04529600000001,14.36215), new google.maps.LatLng(51.038944,14.33563), new google.maps.LatLng(51.055035,14.300937), new google.maps.LatLng(50.98484,14.262467), new google.maps.LatLng(50.985081,14.321633), new google.maps.LatLng(50.954037,14.311208), new google.maps.LatLng(50.923813,14.401138), new google.maps.LatLng(50.898743,14.386542), new google.maps.LatLng(50.883823,14.303788), new google.maps.LatLng(50.89514900000001,14.268942), new google.maps.LatLng(50.88742400000001,14.233461), new google.maps.LatLng(50.85956999999999,14.223505), new google.maps.LatLng(50.825909,14.089629), new google.maps.LatLng(50.80377599999999,14.032634), new google.maps.LatLng(50.819744,13.990362), new google.maps.LatLng(50.789787,13.937957), new google.maps.LatLng(50.794621,13.903714), new google.maps.LatLng(50.769814,13.88664), new google.maps.LatLng(50.75376500000001,13.90151), new google.maps.LatLng(50.7271,13.855301), new google.maps.LatLng(50.734081,13.72807), new google.maps.LatLng(50.716564,13.708775), new google.maps.LatLng(50.73197200000001,13.664718), new google.maps.LatLng(50.710186,13.602277), new google.maps.LatLng(50.705093,13.525352), new google.maps.LatLng(50.677803,13.543988), new google.maps.LatLng(50.602154,13.463219), new google.maps.LatLng(50.61622200000001,13.416234), new google.maps.LatLng(50.650833,13.37019), new google.maps.LatLng(50.627972,13.376992), new google.maps.LatLng(50.608425,13.324405), new google.maps.LatLng(50.58149000000001,13.323066), new google.maps.LatLng(50.575417,13.291305), new google.maps.LatLng(50.595219,13.253185), new google.maps.LatLng(50.50519900000001,13.197175), new google.maps.LatLng(50.50386,13.103872), new google.maps.LatLng(50.509701,13.030821), new google.maps.LatLng(50.452991,13.022598), new google.maps.LatLng(50.42173799999999,12.986719), new google.maps.LatLng(50.41152200000001,12.937275), new google.maps.LatLng(50.460468,12.818429), new google.maps.LatLng(50.431927,12.734179), new google.maps.LatLng(50.397549,12.706846), new google.maps.LatLng(50.416691,12.673626), new google.maps.LatLng(50.39754500000001,12.512054), new google.maps.LatLng(50.32317,12.431948), new google.maps.LatLng(50.32364700000001,12.403716), new google.maps.LatLng(50.29427,12.400584), new google.maps.LatLng(50.285351,12.370409), new google.maps.LatLng(50.236176,12.34933), new google.maps.LatLng(50.24298499999999,12.330461), new google.maps.LatLng(50.175339,12.328658), new google.maps.LatLng(50.17677699999999,12.290742), new google.maps.LatLng(50.196964,12.27521), new google.maps.LatLng(50.220383,12.293001), new google.maps.LatLng(50.246159,12.239703), new google.maps.LatLng(50.270882,12.254152), new google.maps.LatLng(50.274063,12.201343), new google.maps.LatLng(50.32243,12.185061), new google.maps.LatLng(50.31554000000001,12.125147), new google.maps.LatLng(50.275227,12.138318), new google.maps.LatLng(50.262596,12.097762), new google.maps.LatLng(50.237793,12.109364), new google.maps.LatLng(50.226761,12.158472), new google.maps.LatLng(50.21376399999999,12.157775), new google.maps.LatLng(50.16748,12.215292), new google.maps.LatLng(50.143612,12.195339), new google.maps.LatLng(50.110245,12.199394), new google.maps.LatLng(50.07622899999999,12.274102), new google.maps.LatLng(50.063278,12.259307), new google.maps.LatLng(50.05250199999999,12.318327), new google.maps.LatLng(49.984043,12.431649), new google.maps.LatLng(49.99444200000001,12.460572), new google.maps.LatLng(49.97178599999999,12.498642), new google.maps.LatLng(49.935169,12.478603), new google.maps.LatLng(49.919952,12.546838), new google.maps.LatLng(49.838207,12.498633), new google.maps.LatLng(49.809952,12.464216), new google.maps.LatLng(49.786922,12.468387), new google.maps.LatLng(49.762714,12.405051), new google.maps.LatLng(49.732441,12.412525), new google.maps.LatLng(49.705799,12.440324), new google.maps.LatLng(49.68562299999999,12.521661), new google.maps.LatLng(49.642471,12.519207), new google.maps.LatLng(49.617664,12.536824), new google.maps.LatLng(49.618942,12.561506), new google.maps.LatLng(49.537807,12.588274), new google.maps.LatLng(49.52248000000001,12.644343), new google.maps.LatLng(49.434452,12.655053), new google.maps.LatLng(49.42429,12.70835), new google.maps.LatLng(49.394108,12.757416), new google.maps.LatLng(49.34600099999999,12.782891), new google.maps.LatLng(49.34465000000001,12.84552), new google.maps.LatLng(49.33342,12.887615), new google.maps.LatLng(49.35003700000001,12.880971), new google.maps.LatLng(49.3423,12.950224), new google.maps.LatLng(49.305359,13.008141), new google.maps.LatLng(49.30336799999999,13.029025), new google.maps.LatLng(49.26453000000001,13.033426), new google.maps.LatLng(49.247223,13.081072), new google.maps.LatLng(49.228672,13.085818), new google.maps.LatLng(49.162312,13.176253), new google.maps.LatLng(49.14343599999999,13.170009), new google.maps.LatLng(49.11293,13.236241), new google.maps.LatLng(49.120296,13.281756), new google.maps.LatLng(49.088413,13.343881), new google.maps.LatLng(49.023426,13.405293), new google.maps.LatLng(48.987183,13.402064), new google.maps.LatLng(48.942432,13.508308), new google.maps.LatLng(48.969082,13.507849), new google.maps.LatLng(48.970615,13.580902), new google.maps.LatLng(48.92664700000001,13.637071), new google.maps.LatLng(48.880611,13.670925), new google.maps.LatLng(48.887016,13.730486), new google.maps.LatLng(48.830372,13.77074), new google.maps.LatLng(48.797455,13.814472), new google.maps.LatLng(48.774685,13.812494), new google.maps.LatLng(48.768158,13.872322), new google.maps.LatLng(48.721642,13.942451), new google.maps.LatLng(48.705177,14.008565), new google.maps.LatLng(48.653088,14.05282), new google.maps.LatLng(48.639977,14.009859), new google.maps.LatLng(48.62674,14.047331), new google.maps.LatLng(48.60342,14.054204), new google.maps.LatLng(48.58996599999999,14.118127), new google.maps.LatLng(48.593292,14.182843), new google.maps.LatLng(48.576801,14.239554), new google.maps.LatLng(48.58046,14.27059), new google.maps.LatLng(48.55407,14.32631), new google.maps.LatLng(48.591541,14.386917), new google.maps.LatLng(48.588253,14.431321), new google.maps.LatLng(48.646027,14.468823), new google.maps.LatLng(48.616112,14.503754), new google.maps.LatLng(48.602707,14.561901), new google.maps.LatLng(48.62716300000001,14.604406), new google.maps.LatLng(48.605129,14.62425), new google.maps.LatLng(48.609066,14.647694), new google.maps.LatLng(48.581097,14.663896), new google.maps.LatLng(48.582001,14.701008), new google.maps.LatLng(48.601646,14.721654), new google.maps.LatLng(48.65016200000001,14.713155), new google.maps.LatLng(48.70110699999999,14.741063), new google.maps.LatLng(48.733963,14.808811), new google.maps.LatLng(48.778828,14.809464), new google.maps.LatLng(48.78082299999999,14.868244), new google.maps.LatLng(48.75840400000001,14.956911), new google.maps.LatLng(48.78104,14.978279), new google.maps.LatLng(48.78851300000001 ,14.956352)];

    var cr = new google.maps.Polygon({
      paths: [okolo,statCR],
      strokeColor: "#000000",
      strokeOpacity: 0,
      strokeWeight: 2,
      fillColor: "#000000",
      fillOpacity: 0
    });

    cr.setMap(map);

      
    google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
        });

var image6 = new google.maps.MarkerImage( '/img/srvimg/magniflex_svetllejsi-zelena-stinnew.png', null, null, new google.maps.Point(16, 44));

var point = new google.maps.LatLng(55.737077, 37.616158);
var name = 'marker1';
var html = '<h4>Шоу-рум Magniflex</h4>Москва, м. Павелецкая/Таганская, Космодамианская набережная, дом 36<br /><div><a href="#hnb_yakor_adress1">Детально</a></div>';
var category = 'category6';
var marker = createMarker(point,name,html,category,image6,'Шоу-рум');

/////////////////////////////////////////////new////////////////////////////////////////////////////////////

var image4 = new google.maps.MarkerImage( '/img/srvimg/magniflex_svetllejsi-zelena-stinnew.png', null, null, new google.maps.Point(16, 44));

var point = new google.maps.LatLng(59.981680, 30.358331);
var name = 'marker4';
var html = '<h4>САЛОН ИТАЛЬЯНСКИХ МАТРАСОВ</h4>Адрес: ул. Новолитовская 15"В", 5-й этаж, секция 164<br /><div></div>';
var category = 'category4';
var marker = createMarker(point,name,html,category,image4,'САЛОН ИТАЛЬЯНСКИХ МАТРАСОВ');

/////////////////////////////////////////////new////////////////////////////////////////////////////////////

var image6 = new google.maps.MarkerImage( '/img/srvimg/magniflex_svetllejsi-zelena-stinnew.png', null, null, new google.maps.Point(14, 13));

var point = new google.maps.LatLng(59.990883, 30.205878);
var name = 'marker6';
var html = '<h4>И.П. ВИКЕРАС Я.С.</h4>ул.САВУШКИНА д.141 МЦ"ГРЕЙТ" 1ЭЖ<br /><div></div>';
var category = 'category6';
var marker = createMarker(point,name,html,category,image6,'И.П. ВИКЕРАС Я.С.');

/////////////////////////////////////////////new////////////////////////////////////////////////////////////







markerCluster = new MarkerClusterer(map, gmarkers, {maxZoom: 19, gridSize: 30});

    }
    //]]>