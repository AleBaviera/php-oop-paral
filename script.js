function init(){
  getData();

}

function getData(){
  $.ajax({
    url: 'api.php',
    method: 'GET',
    data: {
      base1: prompt('base'),
      alt1:prompt('altezza'),
      prof1:prompt('profondità'),

      base2: prompt('base'),
      alt2:prompt('altezza'),
      prof2:prompt('profondità'),

      base3: prompt('base'),
      alt3:prompt('altezza'),
      prof3:prompt('profondità'),


    },
    success: function(data){
      printDataParal(data);
      printDataSum(data);
      console.log(data);
    },
    error: function(){}
  });

}

function printDataParal(data){
  var target = $('.container .paral');

  var source = $('#item-template').html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length-2; i++) {
    var d = data[i];
    if (d.base) {
        var context = {
          base: d.base,
          alt: d.alt,
          prof: d.prof,
          area: data[i+1],
          volume: data[i+2]
        }
      var html = template(context);
      target.append(html);
    }

  }

}
function printDataSum(data){
  var target = $('.container .sum');

  var source = $('#item-template2').html();
  var template = Handlebars.compile(source);


  for (var i = data.length-1; i < data.length; i++) {


    var context = {
      sumArea: data[i-1],
      sumVol: data[i]
    };

  }
  var html = template(context);
  target.append(html);
}
$(document).ready(init);
