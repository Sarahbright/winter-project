$(window).load(function(){
    var $tltDemo = $('#story');
    $tltDemo.textillate(getOptionDate());

    $('#textillateDemoSelect select, #textillateDemoSelect input').on('change', function(){
        $tltDemo.textillate(getOptionDate());
        $tltDemo.textillate('stop');
        $tltDemo.textillate('start');
    });

    function getOptionDate() {
        var _tmp = {
            loop: true,
            in: {},
            out: {},
            inEffects: [],
            outEffects: []
        };
        var _ina01  = $('.in-animation01').val();
        var _ina02  = $('.in-animation02').val();
        var _ina03  = $('.in-animation03').val();
        var _outa01 = $('.out-animation01').val();
        var _outa02 = $('.out-animation02').val();
        var _outa03  = $('.out-animation03').val();
        _tmp.inEffects      = [_ina01];
        _tmp['in'].effect   = _ina01;
        _tmp['in'].shuffle  = (_ina02 === 'shuffle');
        _tmp['in'].reverse  = (_ina02 === 'reverse');
        _tmp['in'].sync     = (_ina02 === 'sync');
        _tmp['in'].delay     = _ina03;

        _tmp.outEffects     = [_outa01];
        _tmp['out'].effect  = _outa01;
        _tmp['out'].shuffle = (_outa02 === 'shuffle');
        _tmp['out'].reverse = (_outa02 === 'reverse');
        _tmp['out'].sync    = (_outa02 === 'sync');
        _tmp['out'].delay     = _outa03;

        return _tmp;
    }
});
