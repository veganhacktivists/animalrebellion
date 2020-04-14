// **  MAP ** //
var map

export function initializeMap(locations) {
  createBaseMapLayer()
  loadLocationIcons(locations)
  loadLocationPopups()
}

function createBaseMapLayer() {
  map = new ol.Map({
    target: 'map',
    layers: [
      new ol.layer.Tile({
        source: new ol.source.OSM(),
      }),
    ],
    view: new ol.View({
      center: [0, 0],
      zoom: 2,
    }),
  })
}

function loadLocationIcons(locations) {
  var features = []

  // Loop over locations array, add new map point based on coordinates
  locations.forEach((location) => {
    features.push(
      new ol.Feature({
        geometry: new ol.geom.Point(
          ol.proj.fromLonLat([location.lng, location.lat]),
        ),
        name: location.name,
      }),
    )
  })

  // Create new map layer with coordinate points
  var layer = new ol.layer.Vector({
    source: new ol.source.Vector({
      features: features,
    }),
  })

  // Add map layer to view
  map.addLayer(layer)
}

//** LOCATION POPUPS **//
// Modified code from the following source: https://openlayers.org/en/latest/examples/icon.html
function loadLocationPopups() {
  var element = document.getElementById('popup')

  // Overlay for popup
  var popup = new ol.Overlay({
    element: element,
    positioning: 'bottom-center',
    stopEvent: false,
    offset: [0, -10],
  })
  map.addOverlay(popup)

  // display popup on click
  map.on('click', function(evt) {
    var feature = map.forEachFeatureAtPixel(evt.pixel, function(feature) {
      return feature
    })

    // if click is on existing point on map
    if (feature) {
      $(element).popover('dispose')
      var coordinates = feature.getGeometry().getCoordinates()
      popup.setPosition(coordinates)
      $(element).popover({
        placement: 'top',
        html: true,
        content: feature.get('name'),
      })
      $(element).popover('show')
    } else {
      $(element).popover('dispose')
    }
  })
}

window.initializeMap = initializeMap
