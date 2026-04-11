const fs = require('fs');
const path = require('path');

const targetDir = path.join(__dirname, 'hostinger');

// Create the hostinger directory if it doesn't exist
if (!fs.existsSync(targetDir)) {
    fs.mkdirSync(targetDir);
}

// List of folders and files to copy
const itemsToCopy = ['dist', 'components', 'js', 'pages', 'public', 'index.php'];

console.log('Copying required files to hostinger folder...');

itemsToCopy.forEach(item => {
    const source = path.join(__dirname, item);
    const dest = path.join(targetDir, item);
    
    // Only copy if the source exists
    if (fs.existsSync(source)) {
        try {
            // cpSync is available in Node.js >= 16.7.0
            fs.cpSync(source, dest, { recursive: true, force: true });
            console.log(`✓ Copied: ${item}`);
        } catch (err) {
            console.error(`✗ Error copying ${item}:`, err.message);
        }
    } else {
        console.log(`- Skipped: ${item} (does not exist)`);
    }
});

console.log('\nDeployment folder ready! You can now upload the contents of the "hostinger" folder.');
