/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

// Create base map layer
var map = new ol.Map({
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

// Create empty features array
var features = []

// Loop over groups array, add new map point based on coordinates
groups.forEach((group) => {
  features.push(
    new ol.Feature({
      geometry: new ol.geom.Point(ol.proj.fromLonLat([group.lng, group.lat])),
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
