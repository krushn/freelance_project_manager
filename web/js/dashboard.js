
    $chart = new Morris.Line({
        element: 'morris-chart-1',
        data: [],
        xkey: 'date',
        ykeys: ['paid'],
            yLabelFormat: function(y) {
            return '$'+y ;
        },
        labels: ['income'],
        parseTime: false,
        lineColors: ['#72af46'],
        gridTextColor: ['#686868'],
        lineWidth: ['2px'],
        grid: true,
        smooth: true,
        resize: true,
        xLabelAngle: 45,
        hideHover: 'auto'
    });        

    function set_graph(){
        $.get('index.php?r=site/graph', { type: $('#graph_type').val() }, function($data){
            $chart.setData($data);    
        });        
    }
    
    $(function(){
        $('#graph_type').change(function(){
            set_graph();
        });

        set_graph();
    })