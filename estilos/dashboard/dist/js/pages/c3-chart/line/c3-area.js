/*************************************************************************************/
// -->Template Name: Bootstrap Press Admin
// -->Author: Themedesigner
// -->Email: niravjoshi87@gmail.com

//grafica.forEach(function(element,index){
//  grafica[index];
//});
// -->File: c3_chart_JS
/*************************************************************************************/
$(function() {
  if (genero == "Ambos") {
    var a = c3.generate({
        bindto: "#area-chart",
        size: { height: 300 },
        point: { r: 4 },
        color: { pattern: ["#2962FF", "#4fc3f7"] },
        data: {
          x: "x",
            columns: [
                x_dias,
                dias_masculino,
                dias_femenino

            ],
            types: { data1: "area", data2: "area-spline" }
        },
        grid: { y: { show: !0 } }
    });
  }else if(genero == "Masculino"){
    var a = c3.generate({
        bindto: "#area-chart",
        size: { height: 300 },
        point: { r: 4 },
        color: { pattern: ["#2962FF", "#4fc3f7"] },
        data: {
          x: "x",
            columns: [
                x_dias,
                dias_masculino

            ],
            types: { data1: "area", data2: "area-spline" }
        },
        grid: { y: { show: !0 } }
    });
  }else if (genero == "Femenino") {
    var a = c3.generate({
        bindto: "#area-chart",
        size: { height: 300 },
        point: { r: 4 },
        color: { pattern: ["#2962FF", "#4fc3f7"] },
        data: {
          x: "x",
            columns: [
                x_dias,
                dias_femenino

            ],
            types: { data1: "area", data2: "area-spline" }
        },
        grid: { y: { show: !0 } }
    });
  }

});
