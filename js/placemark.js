ymaps.ready(init);

function init () {
var myMap = new ymaps.Map("map", {
center: [56.84, 60.63],
zoom: 12.2
}, {
searchControlProvider: 'yandex#search'
}),

// Создаем геообъект с типом геометрии "Точка".
myGeoObject = new ymaps.GeoObject({

}
);

myMap.geoObjects
.add(myGeoObject)
.add(new ymaps.Placemark([56.862657, 60.635051], {

iconCaption: 'Пионерский, Чекистов 7'
}, {
preset: 'islands#greenDotIconWithCaption'
}))
.add(new ymaps.Placemark([56.840138, 60.610671], {

iconCaption: 'Центр, Карла Либкнехта 23'
}, {
preset: 'islands#redDotIconWithCaption'
}))
.add(new ymaps.Placemark([56.849403, 60.633955], {

iconCaption: 'Пионерский, Флотская 41'
}, {
preset: 'islands#blueDotIconWithCaption'
}))
.add(new ymaps.Placemark([56.818341, 60.546073], {

iconCaption: 'Виз Ухтомская 41'
}, {
preset: 'islands#darkblueDotIconWithCaption'
}))
.add(new ymaps.Placemark([56.83224, 60.661695], {

iconCaption: 'ВТУЗ, ЖБИ Библиотечная 45'
}, {
preset: 'islands#orangeDotIconWithCaption'
}));
}