# db.d11z.me

A web **d**ash**b**oard for **d**arren sopiar**z**, **me**!

Most browsers come with a default homepage that is either bloated, useless, or just downright awful.  I decided to make my own, to host on my own.  I don't know exactly what will be on the dashboard, but it will definitely be ever-changing as my needs change.

If you want to use this dashboard yourself, please fork it to customize it for your own needs first.  Then follow the "Usage" instructions below to deploy it.

## App Features

- Dark background to reduce eye strain.
- Link to localhost in new tab for local web development

### Development Features

- Kint: For debugging
- Browsersync: For auto-refresh in browsers
- Foundation: For a front-end jumpstart

---

## Usage

To use this dashboard, four main tasks are required:

1. Build the production-ready files
2. Setup a domain & hosting environment
3. Upload the production files for use
4. Configure a browser's homepage to use the new dashboard

Here's an example of how to do this:

1. Run `npm run build` to create production ready files
	1. Remove `debug` from `app.scss` first
2. Setup a domain & hosting
	1. Create a subdomain like `db.d11z.me` (simple and short)
	2. Create an FTP user for the new domain
	3. Create an SFTP config file for Sublime Text and test the connection
		1. See the SFTP config section below for proper setup
	4. Upload the necessary files to the server & test
		1. Rename `.sample-htaccess` first and update as necessary
			1. Don't worry, if the htaccess file is removed locally, it will still be on the server
3. Set your favorite browser's homepage to the new dashboard domain
4. ???
5. Profit!

---

## TODO

- Put PHP browser/server config info into an off-canvas menu
- Implement basic Foundation JS features such as motion/move and put in another off-canvas menu

---

## Development Setup

```bash
composer install
npm install
```

### Kint

- Change `DEBUG_MODE` to `true` in `config.php`
- `include_once 'vendor/autoload.php';`
- `d( $variable|function|object );`

### Foundation

- `npm start` starts the development environment including browsersync
- `npm run build` creates minified production assets

**Note:** Check the `config.yml` file to make sure the `PROXY` setting is correct.  Also make sure to *not* commit a custom PROXY to the repo unless it's a forked and unique project.

### SFTP Config

To sync the project up to the production area, add the following rules to the `sftp-config.json` file to avoid uploading development files.

- `".gitignore", "gulpfile.babel.js", "composer.json", "package.json", "package-alt.json", "composer.lock", "readme.md", "config.yml", "vendor/", "node_modules/", "src/", "dist/assets/scss/", "code-workspace"`

---

## Cool Ideas

- Create a setup form to customize the dashboard for other users
	- Save info to a file or database?