<!DOCTYPE html>
<html>
    <head>
        <link rel="SHORTCUT ICON" href="images/icon.png" type="image/png">
        <link rel="stylesheet" href="standart_style.css">
        <meta charset="utf-8">
        <title>Главная</title>
        
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <script src="https://api-maps.yandex.ru/2.1/?apikey=5530e4d1-ea71-4afa-a4de-fde057c69352&lang=ru_RU" type="text/javascript">
            </script>        
           
            <script type="text/javascript">
                ymaps.ready(init);
                function init() {
                 var myMap = new ymaps.Map("map", {
                     center: [55.76, 37.64],
                     controls: ['routeButtonControl'],
                      zoom: 10
                     }, {
                        searchControlProvider: 'yandex#search'
                     }),
                     
                // Создаем геообъект с типом геометрии "Точка".
                 myGeoObject = new ymaps.GeoObject({
                      // Описание геометрии.
                      geometry: {
                         type: "Point",
                         coordinates: [55.8, 37.8]
                       },
                        // Свойства.
                        properties: {
                      // Контент метки.
    
                      }
                  }, {
                        // Опции.
                        // Иконка метки будет растягиваться под размер ее содержимого.
                        preset: 'islands#blackStretchyIcon',
                        // Метку можно перемещать.
                     draggable: true
                     }),
                  myPieChart = new ymaps.Placemark([55.847, 37.6], 
                 {
                     // Данные для построения диаграммы.
                      data: [
                     ],
                   }, {
            // Зададим произвольный макет метки.
             iconLayout: 'default#pieChart',
            // Радиус диаграммы в пикселях.
             iconPieChartRadius: 30,
            // Радиус центральной части макета.
             iconPieChartCoreRadius: 10,
            // Стиль заливки центральной части.
                      iconPieChartCoreFillStyle: '#ffffff',
            // Cтиль линий-разделителей секторов и внешней обводки диаграммы.
                     iconPieChartStrokeStyle: '#ffffff',
            // Ширина линий-разделителей секторов и внешней обводки диаграммы.
                       iconPieChartStrokeWidth: 3,
            // Максимальная ширина подписи метки.
                       iconPieChartCaptionMaxWidth: 300
                   });

                myMap.geoObjects
                  .add(myGeoObject)
                  .add(myPieChart)
                  .add(new ymaps.Placemark([55.706470, 37.555561], {
            balloonContent: 'Назовите храм у Воробьевых гор',
            iconCaption: 'ВОРОБЬЕВЫ ГОРЫ, ЗАДАНИЕ ПОИСК ХРАМА'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([55.752078, 37.617498], {
            balloonContent: 'Посчитайте количество башен',
            iconCaption: 'КРАСНАЯ ПЛОЩАДЬ, ЗАДАНИЕ ПО СЧЕТУ КУПОЛОВ'
        }, {
            preset: 'islands#blueCircleDotIconWithCaption',
            iconCaptionMaxWidth: '300'
        }));
}
            </script>
    </head>
    <body>
        <div class="panel-main">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="history_sessions.php">История мест</a></li>
                <li><a href="help.html">Помощь</a></li>
                <li><a href="info.html">Информация</a></li>
                <li><a href="signIn_Authorization.php">Авторизация</a></li>
                <li><a href="signIn_Registration.php">Регистрация</a></li>
            </ul>
        </div>
        <table align="center">
            <tr>
                <td><div class="history-sessions">
                    <h3 align="center">Пройденные квесты</h3>
                    <ul>
                        <li>Квест Башни Кремля<br><b>Пройден</b></li>
                    </ul>
                </div></td>
                <td><div class="site-body" align="center">
                    <div id="map" style="width: 95%; height: 95%;"></div>                
                </div></td>
                <td><div class="popular">
                    <h3 align="center">Наиболее популярные</h3>
                </div></td>
            </tr>
        </table>
    </body>
</html>