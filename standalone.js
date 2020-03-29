if(require('electron-squirrel-startup')) return;
//const autoUpdater = require("electron-updater");
const electron = require("electron");
// Module to control application life.
const app = electron.app;
// Module to create native browser window.
const BrowserWindow = electron.BrowserWindow;

// Keep a global reference of the window object, if you don't, the window will
// be closed automatically when the JavaScript object is garbage collected.
let mainWindow;

function createWindow() {
  // electron browser window set up
  mainWindow = new BrowserWindow({
    width: 1024,
    height: 728,
    // this is important since currently there is no support for scrollable menus
    minWidth: 600, // set a min width!
    minHeight: 300, // and a min height!
    // Remove the window frame from windows applications
    frame: false,
    // Hide the titlebar from MacOS applications while keeping the stop lights
    titleBarStyle: "customButtonsOnHover", // or 'hidden',
    icon: __dirname + "/media/dickbutt_192.png",
    webPreferences: {
      nodeIntegration: true
    }
  });

  // and load the github hosted page.
  mainWindow.loadURL("https://www.example.com/");
  //mainWindow.loadURL("file://" + __dirname + "/index.html");
  // mainWindow.loadURL('file://' + __dirname + '/bower_components/angular-material/angular-material.css')

  // Open the DevTools.
  // mainWindow.webContents.openDevTools();

  // Emitted when the window is closed.
  mainWindow.on("closed", function() {
    // Dereference the window object, usually you would store windows
    // in an array if your app supports multi windows, this is the time
    // when you should delete the corresponding element.
    mainWindow = null;
  });
}

// app.commandLine.appendSwitch('allow-file-access');
// This method will be called when Electron has finished
// initialization and is ready to create browser windows.
// Some APIs can only be used after this event occurs.
/*app.on("ready", () => {
    autoUpdater.checkForUpdatesAndNotify();
    createWindow;
  });*/

app.on("ready", createWindow);

// Quit when all windows are closed.
app.on("window-all-closed", function() {
  // On OS X it is common for applications and their menu bar
  // to stay active until the user quits explicitly with Cmd + Q
  if (process.platform !== "darwin") {
    app.quit();
  }
});

app.on("activate", function() {
  // On OS X it's common to re-create a window in the app when the
  // dock icon is clicked and there are no other windows open.
  if (mainWindow === null) {
    createWindow();
  }
});
