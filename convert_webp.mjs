import { execSync } from 'child_process';
import fs from 'fs';
import path from 'path';

// Install sharp locally if not present
try {
  import('sharp');
} catch (e) {
  console.log('Installing sharp...');
  execSync('npm install sharp --no-save');
}

const sharp = (await import('sharp')).default;

const dir = path.join(process.cwd(), 'public/images');
const files = fs.readdirSync(dir);

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
