const { execSync } = require('child_process');
const fs = require('fs');
const path = require('path');

try {
  require.resolve('sharp');
} catch (e) {
  console.log('Installing sharp...');
  execSync('npm install sharp --no-save', { stdio: 'inherit' });
}

const sharp = require('sharp');

const dir = path.join(process.cwd(), 'public/images');
const files = fs.readdirSync(dir);

(async () => {
  for (const file of files) {
    if (file.endsWith('.jpg') || file.endsWith('.png') || file.endsWith('.jpeg')) {
      const ext = path.extname(file);
      const basename = path.basename(file, ext);
      const webpPath = path.join(dir, `${basename}.webp`);
      
      if (!fs.existsSync(webpPath)) {
        console.log(`Converting ${file} to webp...`);
        await sharp(path.join(dir, file))
          .webp({ quality: 80 })
          .toFile(webpPath);
      }
    }
  }
  console.log('Done!');
})();
