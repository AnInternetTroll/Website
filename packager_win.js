const electronInstaller = require("electron-winstaller");
async function installer() {
  try {
    await electronInstaller.createWindowsInstaller({
      appDirectory: "./Luca-App-win32-x64",
      outputDirectory: "./dist/winInstaller/",
      authors: "An Internet Troll",
      exe: "Luca's Website.exe",
      setupIcon: "./media/dickbutt_192.ico",
      setupExe: "Luca's installer.exe",
      noMsi: true,
      setupMsi: "installer.exe",
      loadingGif: "./media/loader.gif"
    });
    console.log("It worked!");
  } catch (e) {
    console.log(`No dice: ${e.message}`);
  }
}
installer();
