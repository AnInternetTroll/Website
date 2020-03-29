const installer = require('electron-installer-debian')

const options = {
  // TODO: check This
  src: './build/deb//',
  dest: './dist/debInstaller/',
  arch: 'amd64',
  name: "Luca's App",
  productName: "Luca's App",
  description: "Luca's website, now an app!",
  icon: './media/dickbutt_192.png'
}

async function main (options) {
  console.log('Creating package (this may take a while)')
  try {
    await installer(options)
    console.log(`Successfully created package at ${options.dest}`)
  } catch (err) {
    console.error(err, err.stack)
    process.exit(1)
  }
}
main(options)
