# 🇹🇳 TunisiaGovernoratesBundle

**TunisiaGovernoratesBundle** est un bundle Symfony qui fournit un champ de formulaire avec autocomplétion pour sélectionner les 24 gouvernorats tunisiens.  
Il utilise **Stimulus** pour la logique côté client et **AssetMapper** pour la gestion des assets.

---

## ✅ Prérequis

- PHP **8.1+**  
- Symfony **6.0+**  
- Composer

---

## ⚙️ Installation

### 1. Ajouter le bundle à `composer.json`

```json
{
  "require": {
    "acme/tunisia-governorates-bundle": "dev-main"
  },
  "repositories": [
    {
      "type": "path",
      "url": "path/to/TunisiaGovernoratesBundle"
    }
  ]
}
```

### 2. Mettre à jour les dépendances

```bash
composer update acme/tunisia-governorates-bundle
```

### 3. Activer le bundle dans `config/bundles.php`

```php
Acme\TunisiaGovernoratesBundle\TunisiaGovernoratesBundle::class => ['all' => true],
```

### 4. Installer les assets JavaScript

```bash
php bin/console importmap:install
```

---

## ⚙️ Configuration (optionnelle)

Par défaut, le bundle fournit la liste complète des 24 gouvernorats tunisiens :

> Ariana, Béja, Ben Arous, Bizerte, Gabès, Gafsa, Jendouba, Kairouan, Kasserine, Kébili, Le Kef, Mahdia, Manouba, Médenine, Monastir, Nabeul, Sfax, Sidi Bouzid, Siliana, Sousse, Tataouine, Tozeur, Tunis, Zaghouan.

Vous pouvez personnaliser cette liste dans le fichier suivant :  
`config/packages/tunisia_governorates.yaml`

```yaml
tunisia_governorates:
    governorates:
        - Ariana
        - Béja
        - Ben Arous
        # Ajoutez vos gouvernorats personnalisés ici
```

---

## 👤 Auteur

**Jlassi Mariem**

---

## 📄 Licence

Ce projet est distribué sous la licence **MIT**.
