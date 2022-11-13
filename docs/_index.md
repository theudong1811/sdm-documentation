<p class="HeroText">
	<strong>Daux.io</strong> is a documentation generator that uses a simple folder structure and Markdown files to create custom documentation on the fly. It helps you create great looking documentation in a developer friendly way.
</p>

---

### Features

---

<div class="Row">
<div class="Row__third">

#### For Authors

-   [Auto Generated Navigation / Page sorting](01_Features/Navigation_and_Sorting.md)
-   [Internal documentation links](01_Features/Internal_links.md)
-   [CommonMark compliant](01_Features/CommonMark_compliant.md)
-   [Auto created homepage/landing page](01_Features/Landing_page.md)
-   [Multiple Output Formats](01_Features/Multiple_Output_Formats.md)
-   [Multiple Languages Support](01_Features/Multilanguage.md)
-   [No Build Step](01_Features/Live_mode.md)
-   [Static Output Generation](01_Features/Static_Site_Generation.md)
-   [Table of Contents](01_Features/Table_of_contents.md)

</div>
<div class="Row__third">

#### For Developers

-   [Auto Syntax Highlighting](01_Features/Auto_Syntax_Highlight.md)
-   [Math, Diagrams and Flowcharts](01_Features/Math_Diagrams_Flowcharts.md)
-   [Extend Daux.io with Processors](01_For_Developers/Creating_a_Processor.md)
-   Full access to the internal API to create new pages programatically
-   Work with pages metadata

</div>
<div class="Row__third">

#### For Marketing

-   100% Mobile Responsive
-   4 Built-In Themes or roll your own
-   Functional, Flat Design Style
-   Shareable/Linkable SEO Friendly URLs
-   Supports Google Analytics and Piwik Analytics

</div>
</div>

---

### Installation and usage

If you have **PHP** and Composer installed

```bash
composer global require daux/daux.io

# Next to your `docs` folder, run
daux generate
```

Or if you wish to use **Docker**

```bash
# Next to your `docs` folder, run
docker run --rm -it -w /build -v "$PWD":/build daux/daux.io daux generate
```

---
