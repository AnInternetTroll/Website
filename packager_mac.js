var opts = {
  appPath: "./build/darwin/Luca-App-darwin-x64/Luca-App.app",
  out: "./dist/darwinInstaller/",
  name: "Luca's app",
  title: "Luca's installer",
  icon: "./media/dickbutt_192.icns",
  overwrite: true,
  debug: true,
  contents: function(opts) {
    return [
      { x: 448, y: 344, type: "link", path: "/Applications" },
      { x: 192, y: 344, type: "file", path: opts.appPath }
    ];
  }
};

var createDMG = require("electron-installer-dmg");
createDMG(opts, function done(err) {});
