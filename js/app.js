$(document).ready(function(){
  
  $(".tooltipme").tooltip();
  $(".summernote").summernote({
    height:"200px"
  });
  
  $("a.new_content_widget").click(function(e){
    e.preventDefault();
    $(this).parent('div').siblings('.contentwell').html("<label>Content Title</label><br><input type='text' class='form-control'><br><label>Content</label><div class='summernote'></div>");
    $(".contentwell .summernote").summernote({
      height:"200px",
      toolbar: [
        //[groupname, [button list]]
         
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
      ]
    }).closest('.contentwell').slideDown();
  });
  
  //multistep modal functions
  prevstep = function() {
    $('.modal.multi-step').trigger('next.m.1');
  }
  nextstep = function() {
    $('.modal.multi-step').trigger('next.m.2');
  }
  gotostep = function(step) {
    $('.modal.multi-step').trigger('next.m.'+step);
  }
  //initiate popovers
  $(function () {
    $('[data-toggle="popover"]').popover()
  })
  $('[data-toggle="popover"]').click(function(e){
    e.preventDefault();
  });
  
  //simulate auto-aliasing
  $("#pagetitle").keyup(function(){
    var title = $(this).val();
    $("#pagetitle_slug").val(
      function(){
        title = title.replace(/ /g, '-');
        return title.toLowerCase();
      }
    );
  });
  
  $(".table-selectable td").click(function(e){
    e.preventDefault();
    $("#widgetconfirm").addClass('btn-primary');
    $(this).parent("tr").siblings('tr').removeClass('info');
    $(this).addClass('info');
  });

  //init stickytabs
  var tabs = $(".stickytabs");
  if(tabs.length){
    $(document).on("scroll", function(e) {
      var windowscroll = $(window).scrollTop();
      var taboffset = $(".stickywrapper").offset().top;
      if (windowscroll > taboffset - 53) {
        tabs.addClass("fixedsticky");
      } else {
        tabs.removeClass("fixedsticky");
      }
      
    });
  }
  
  
  //init some demo chartjs stuff on dashboard
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
  
    var barChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
        {
          fillColor : "rgba(220,220,220,0.5)",
          strokeColor : "rgba(220,220,220,0.8)",
          highlightFill: "rgba(220,220,220,0.75)",
          highlightStroke: "rgba(220,220,220,1)",
          data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        }
      ]
    }
    
    
    var piedata = [
        {
            value: 300,
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "Red"
        },
        {
            value: 50,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Green"
        },
        {
            value: 100,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "Yellow"
        }
    ]

    
    
    var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86, 27, 90]
            }
        ]
    };
    
    var trafficdata = {
        labels: ["5/10", "5/11", "5/12", "5/13", "5/14", "5/15", "5/16","5/17","5/18","5/19"],
        datasets: [
            {   
                responsive: true,
                tooltipFontSize: 8,
                tooltipTitleFontSize: 8,
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(251,187,205,1)",
                data: [28, 48, 40, 80, 86, 67, 90,41,42,90]
            }
        ]
    };
    
    window.onload = function(){
      Chart.defaults.global.tooltipFontSize = 10;
    
      if($("#myChart").length){
      var ctx = document.getElementById("myChart").getContext("2d");
      window.myBar = new Chart(ctx).Bar(barChartData, {
        responsive : true
      });
      }
      if($("#linechart").length){
      var ctx2 = document.getElementById("linechart").getContext("2d");
      window.myBar2 = new Chart(ctx2).Line(data, {
        responsive : true
      });
      }
      if($("#pie1").length){
      var pie1 = document.getElementById("pie1").getContext("2d");
      window.myBar2 = new Chart(pie1).Doughnut(piedata, {
        responsive : true
      });
      }
      if($("#pie2").length){
      var pie2 = document.getElementById("pie2").getContext("2d");
      window.myBar2 = new Chart(pie2).Doughnut(piedata, {
        responsive : true
      });
      }
      if($("#pie3").length){
      var pie3 = document.getElementById("pie3").getContext("2d");
      window.myBar2 = new Chart(pie3).Doughnut(piedata, {
        responsive : true
      });
      }
      if($("#pie4").length){
      var pie4 = document.getElementById("pie4").getContext("2d");
      window.myBar2 = new Chart(pie4).Doughnut(piedata, {
        responsive : true
      });
      }
      
      
      $("[id^='sitetraffic-']").each(function(index){
        var traffics = $(this).get(0).getContext("2d");
        window.myBar2 = new Chart(traffics).Line(trafficdata, {
          responsive : false,
          showScale: false
          
        });
      });
      
      
    }
  
});

