# MDLibrary
Self-hosted library for markdown-based documentation

## Installation
Designed to be self-hosted, MDLibrary is easy to install and *should* run on any Apache-based shared or VPS hosting package.

1. Setup a domain/subdomain at your provider to host MDLibrary.
2. Upload the `index.php` file, `.htaccess`, and the `assets` folder to your web root.
3. Create a "docs" folder in the same directory.
4. Upload your markdown documents to the "docs" directory.
5. Done! Visit your domain/subdomain to view your library.

*You may wish to use a GitHub action or webhook to automate the process of managing your markdown docs folder.*

Optionally, if you're using MDLibrary for internal documentation, upload the `src/robots.txt` file to prevent search indexing - and protect the root directory with a `.htpasswd` file.
