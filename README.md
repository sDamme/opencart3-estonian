# OpenCart 3 Estonian Language Pack

Estonian (eesti keel) language pack for OpenCart 3.x.

Translated the bulk of it with AI from the english language pack that comes pre-installed with opencart, made some adjustments if I noticed that the translations were way off.

## Installation

### Option 1: Manual Installation

1. Download or clone this repository
2. Copy the `et` folder from `upload/admin/language/` to the same location on your Opencart folder, same for `upload/catalog/language/`
3. Go to **Admin → System → Localisation → Languages**
4. Add a new language with:
   - **Name:** Estonian
   - **Code:** et
   - **Locale:** et_EE.UTF-8,et_EE,estonian
   - **Status:** Enabled

### Building the OCMOD zip yourself

1. Zip the `install.xml` and `upload/` folder together:
   ```bash
   zip -r estonian-language-pack.ocmod.zip install.xml upload/
   ```

2. Upload the resulting `estonian-language-pack.ocmod.zip` via **Admin → Extensions → Installer**

## Repository Structure

```
├── install.xml
├── upload/
│   ├── admin/
│   │   └── language/
│   │       └── et/
│   └── catalog/
│       └── language/
│           └── et/
```

## Translation Notes

This language pack was translated with the assistance of AI and reviewed by myself, I did make some manual adjustments if I noticed that the translation was too weird. If you find any translation errors or awkward phrasing, please open an issue or submit a pull request or just fix it for yourself.

## License

This project is licensed under the Apache License 2.0 - see the [LICENSE](LICENSE) file for details.