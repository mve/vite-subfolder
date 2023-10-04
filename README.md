# Steps to reproduce

```bash
# Install dependencies
composer install
npm i

# Start the project with Laravel Sail
./vendor/bin/sail up -d

# Install dependencies for new vite setup
cd vite
npm i

# Build works
npm run build

# Dev starts but does not detect changes.
npm run dev

# Now edit for example this file:
Modules/Filter/Resources/assets/js/components/HelloWorld.vue
```
