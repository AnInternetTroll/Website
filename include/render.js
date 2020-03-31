window.$ = window.jQuery = require("jquery"); // not sure if you need this at all
window.Bootstrap = require("bootstrap");
// All of the Node.js APIs are available in the preload process.
// It has the same sandbox as a Chrome extension.
const url = require("url");
const { app, Menu, MenuItem } = require("electron").remote;
const customTitlebar = require("custom-electron-titlebar");
const isMac = process.platform === "darwin";

window.addEventListener("DOMContentLoaded", () => {
  let titlebar = new customTitlebar.Titlebar({
    backgroundColor: customTitlebar.Color.fromHex("#006bff"),
    icon: url.format(
      "https://github.com/AnInternetTroll/Website/raw/master/media/dickbutt_192.png"
    )
  });
  titlebar.updateMenu(menu);
  const replaceText = (selector, text) => {
    const element = document.getElementById(selector);
    if (element) element.innerText = text;
  };

  for (const type of ["chrome", "node", "electron"]) {
    replaceText(`${type}-version`, process.versions[type]);
  }
});
// Until fixed this code will remain commented

const menu = new Menu();

menu.append(
  new MenuItem({
    // { role: 'appMenu' }
    ...(isMac
      ? [
          {
            label: app.name,
            submenu: [
              { role: "about" },
              { type: "separator" },
              { role: "services" },
              { type: "separator" },
              { role: "hide" },
              { role: "hideothers" },
              { role: "unhide" },
              { type: "separator" },
              { role: "quit" }
            ]
          }
        ]
      : [])
  })
);

menu.append(
  new MenuItem(
    // { role: 'windowMenu' }
    {
      label: "Window",
      submenu: [
        { role: "minimize" },
        ...(isMac
          ? [
              { type: "separator" },
              { role: "front" },
              { type: "separator" },
              { role: "window" }
            ]
          : [{ role: "close" }])
      ]
    }
  )
);

menu.append(
  new MenuItem({
    role: "help",
    submenu: [
      {
        label: "Learn More",
        click: async () => {
          const { shell } = require("electron");
          await shell.openExternal("https://github.com/AnInternetTroll/Website");
        }
      }
    ]
  })
);

menu.append(
  new MenuItem(
    // { role: 'viewMenu' }
    {
      label: "View",
      submenu: [
        { role: "reload" },
        { role: "forcereload" },
        { role: "toggledevtools" },
        { type: "separator" },
        { role: "resetzoom" },
        { role: "zoomin" },
        { role: "zoomout" },
        { type: "separator" },
        { role: "togglefullscreen" }
      ]
    }
  )
);
// Examples to follow
/*
menu.append(
  new MenuItem({
    label: "Item 2",
    submenu: [
      {
        label: "Subitem checkbox",
        type: "checkbox",
        checked: true
      },
      {
        type: "separator"
      },
      {
        label: "Subitem with submenu",
        submenu: [
          {
            label: "Submenu &item 1",
            accelerator: "Ctrl+T"
          }
        ]
      }
    ]
  })
  );

  menu.append(
    new MenuItem({
      label: "Item 1",
      submenu: [
        {
          label: "Subitem 1",
          click: () => console.log("Click on subitem 1")
        },
        {
          type: "separator"
        }
      ]
    })
  );

*/
