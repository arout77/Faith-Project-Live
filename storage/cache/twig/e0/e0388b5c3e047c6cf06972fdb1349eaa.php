<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* bible/reader.twig */
class __TwigTemplate_d485de1031a06f0fd24c8b6d79574657 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("layouts/main.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"max-w-4xl mx-auto px-4 py-12\">
    
    <div class=\"reader-toolbar p-6 rounded-2xl mb-8 flex flex-col sm:flex-row justify-between items-center gap-4\">
        <div>
            <span class=\"text-xs font-mono text-sky-600 dark:text-sky-300 tracking-wider uppercase\">Scripture Reader</span>
            ";
        // line 11
        yield "            <h1 class=\"text-3xl font-black text-slate-950 dark:text-white mt-1\" id=\"bible-meta\" data-book=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_book"] ?? null), "html", null, true);
        yield "\" data-chapter=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_chapter"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["book"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        yield " Chapter ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_chapter"] ?? null), "html", null, true);
        yield "
            </h1>
        </div>
        
        <div class=\"flex items-center gap-4 text-sm font-mono font-bold\">
            ";
        // line 18
        yield "            ";
        if ((($context["current_chapter"] ?? null) > 1)) {
            // line 19
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true);
            yield "/bible/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_book"] ?? null), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["current_chapter"] ?? null) - 1), "html", null, true);
            yield "\" 
                   class=\"px-4 py-2 glass border-slate-800 rounded-lg text-slate-400 hover:text-white transition\">
                   ← Ch. ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["current_chapter"] ?? null) - 1), "html", null, true);
            yield "
                </a>
            ";
        } else {
            // line 24
            yield "                <span class=\"px-4 py-2 border border-slate-900 bg-slate-950/40 rounded-lg text-slate-700 cursor-not-allowed select-none\">
                    ← Start
                </span>
            ";
        }
        // line 28
        yield "
            ";
        // line 30
        yield "            <span class=\"text-sky-400 font-bold px-2\">
                Chapter ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_chapter"] ?? null), "html", null, true);
        yield " of <span id=\"readerTotalChapters\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_chapters"] ?? null), "html", null, true);
        yield "</span>
            </span>

            ";
        // line 35
        yield "            <a id=\"readerNextBtn\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_url"] ?? null), "html", null, true);
        yield "/bible/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_book"] ?? null), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["current_chapter"] ?? null) + 1), "html", null, true);
        yield "\" 
               class=\"px-4 py-2 glass border-slate-800 rounded-lg text-slate-400 hover:text-white transition hidden\">
               Ch. ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["current_chapter"] ?? null) + 1), "html", null, true);
        yield " →
            </a>
            <span id=\"readerEndBtn\" class=\"px-4 py-2 border border-slate-900 bg-slate-950/40 rounded-lg text-slate-700 cursor-not-allowed select-none hidden\">
                End →
            </span>
        </div>
    </div>

    <div id=\"bible-reader\" class=\"reader-panel p-8 md:p-12 rounded-3xl space-y-6 select-text font-serif text-lg leading-relaxed md:text-xl\">
        
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["paragraphs"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
            // line 48
            yield "            <p class=\"verse-paragraph\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["paragraph"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["verse"]) {
                // line 50
                yield "                    <sup class=\"verse-num text-xs font-mono font-bold text-sky-500 ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "mx-1";
                } else {
                    yield "mr-1";
                }
                yield " select-none\" data-verse=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["verse"], "verse", [], "any", false, false, false, 50), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["verse"], "verse", [], "any", false, false, false, 50), "html", null, true);
                yield "</sup>
                    <span class=\"verse-text\" data-verse=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["verse"], "verse", [], "any", false, false, false, 51), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["verse"], "text", [], "any", false, false, false, 51), "html", null, true);
                yield "</span>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['verse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            </p>
        ";
            $context['_iterated'] = true;
        }
        // line 54
        if (!$context['_iterated']) {
            // line 55
            yield "            <div class=\"text-center py-12\">
                <p class=\"text-slate-400 font-sans\">Requested scriptural context layout is empty.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['paragraph'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const reader = document.getElementById('bible-reader');
    const meta = document.getElementById('bible-meta');
    const currentBook = meta.getAttribute('data-book');
    const currentChapter = parseInt(meta.getAttribute('data-chapter'), 10);
    const isLoggedIn = ";
        // line 69
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "check", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";

    // Absolute lookup mapping canonical book slugs to exact physical layout thresholds
    const readerChapterMap = {
        'genesis':50, 'exodus':40, 'leviticus':27, 'numbers':36, 'deuteronomy':34, 'joshua':24, 'judges':21, 'ruth':4,
        '1-samuel':31, '2-samuel':24, '1-kings':22, '2-kings':25, '1-chronicles':29, '2-chronicles':36, 'ezra':10,
        'nehemiah':13, 'esther':10, 'job':42, 'psalms':150, 'proverbs':31, 'ecclesiastes':12, 'song-of-solomon':8,
        'isaiah':66, 'jeremiah':52, 'lamentations':5, 'ezekiel':48, 'daniel':12, 'hosea':14, 'joel':3, 'amos':9,
        'obadiah':1, 'jonah':4, 'micah':7, 'nahum':3, 'habakkuk':3, 'zephaniah':3, 'haggai':2, 'zechariah':14,
        'malachi':4, 'matthew':28, 'mark':16, 'luke':24, 'john':21, 'acts':28, 'romans':16, '1-corinthians':16,
        '2-corinthians':13, 'galatians':6, 'ephesians':6, 'philippians':4, 'colossians':4, '1-thessalonians':5,
        '2-thessalonians':3, '1-timothy':6, '2-timothy':4, 'titus':3, 'philemon':1, 'hebrews':13, 'james':5,
        '1-peter':5, '2-peter':3, '1-john':5, '2-john':1, '3-john':1, 'jude':1, 'revelation':22
    };

    // Dynamic UI Pagination configuration using slug strings
    const totalChaptersCount = readerChapterMap[currentBook] || 50;
    
    // Set text layout limits safely inside the elements
    document.getElementById('readerTotalChapters').textContent = totalChaptersCount;

    const nextBtn = document.getElementById('readerNextBtn');
    const endBtn = document.getElementById('readerEndBtn');

    if (currentChapter < totalChaptersCount) {
        nextBtn.classList.remove('hidden');
    } else {
        endBtn.classList.remove('hidden');
    }

    // --- Highlighting Engine Handlers ---
    loadHighlights();
    reader.addEventListener('mouseup', () => {
        const selection = window.getSelection();
        if (!selection || selection.isCollapsed || selection.toString().trim() === '') return;

        const range = selection.getRangeAt(0);
        const verseTextNode = findVerseParent(range.startContainer);
        if (!verseTextNode) return;

        const verseNumber = verseTextNode.getAttribute('data-verse');
        const parentNode = range.commonAncestorContainer.nodeType === Node.ELEMENT_NODE 
            ? range.commonAncestorContainer 
            : range.commonAncestorContainer.parentNode;

        const existingHighlight = parentNode.closest('.verse-highlight');

        if (existingHighlight) {
            const textNode = document.createTextNode(existingHighlight.textContent);
            existingHighlight.parentNode.replaceChild(textNode, existingHighlight);
            removeHighlight(verseNumber, verseTextNode.innerHTML);
        } else {
            const highlightSpan = document.createElement('span');
            highlightSpan.className = 'verse-highlight bg-yellow-400 text-slate-900 rounded px-0.5';
            
            try {
                range.surroundContents(highlightSpan);
                saveHighlight(verseNumber, verseTextNode.innerHTML);
            } catch (e) {
                console.warn(\"Boundary conflict during cross-node layout interaction tracking.\");
            }
        }
        selection.removeAllRanges();
    });

    function findVerseParent(node) {
        let current = node;
        while (current && current !== reader) {
            if (current.nodeType === Node.ELEMENT_NODE && current.classList.contains('verse-text')) {
                return current;
            }
            current = current.parentNode;
        }
        return null;
    }

    function saveHighlight(verse, completeHTML) {
        const storageKey = `highlight_\${currentBook}_\${currentChapter}`;
        if (!isLoggedIn) {
            let localData = JSON.parse(localStorage.getItem(storageKey)) || {};
            localData[verse] = completeHTML;
            localStorage.setItem(storageKey, JSON.stringify(localData));
        } else {
            sendHighlightToAPI(verse, completeHTML);
        }
    }

    function removeHighlight(verse, completeHTML) {
        const storageKey = `highlight_\${currentBook}_\${currentChapter}`;
        if (!isLoggedIn) {
            let localData = JSON.parse(localStorage.getItem(storageKey)) || {};
            if (!completeHTML.includes('verse-highlight')) {
                delete localData[verse];
            } else {
                localData[verse] = completeHTML;
            }
            if (Object.keys(localData).length === 0) {
                localStorage.removeItem(storageKey);
            } else {
                localStorage.setItem(storageKey, JSON.stringify(localData));
            }
        } else {
            sendHighlightToAPI(verse, completeHTML);
        }
    }

    function sendHighlightToAPI(verse, completeHTML) {
        fetch(`\${window.location.origin}/api/bible/highlight`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                book: currentBook,
                chapter: currentChapter,
                verse: verse,
                html: completeHTML
            })
        }).catch(err => console.error(\"Database selection log connection offline:\", err));
    }

    function loadHighlights() {
        const storageKey = `highlight_\${currentBook}_\${currentChapter}`;
        if (!isLoggedIn) {
            const localData = JSON.parse(localStorage.getItem(storageKey));
            if (!localData) return;

            Object.keys(localData).forEach(verseNum => {
                const targetVerse = reader.querySelector(`.verse-text[data-verse=\"\${verseNum}\"]`);
                if (targetVerse) {
                    targetVerse.innerHTML = localData[verseNum];
                }
            });
        }
    }
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bible/reader.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  228 => 69,  216 => 59,  207 => 55,  205 => 54,  200 => 53,  182 => 51,  169 => 50,  152 => 49,  149 => 48,  144 => 47,  131 => 37,  121 => 35,  113 => 31,  110 => 30,  107 => 28,  101 => 24,  95 => 21,  85 => 19,  82 => 18,  72 => 12,  65 => 11,  58 => 5,  51 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# views/bible/reader.twig #}
{% extends \"layouts/main.twig\" %}

{% block content %}
<div class=\"max-w-4xl mx-auto px-4 py-12\">
    
    <div class=\"reader-toolbar p-6 rounded-2xl mb-8 flex flex-col sm:flex-row justify-between items-center gap-4\">
        <div>
            <span class=\"text-xs font-mono text-sky-600 dark:text-sky-300 tracking-wider uppercase\">Scripture Reader</span>
            {# FIXED: Changed {{ book }} to {{ book.name }} and mapped correct variable names #}
            <h1 class=\"text-3xl font-black text-slate-950 dark:text-white mt-1\" id=\"bible-meta\" data-book=\"{{ current_book }}\" data-chapter=\"{{ current_chapter }}\">
                {{ book.name }} Chapter {{ current_chapter }}
            </h1>
        </div>
        
        <div class=\"flex items-center gap-4 text-sm font-mono font-bold\">
            {# FIXED: Updated conditions and paths to use current_chapter and current_book #}
            {% if current_chapter > 1 %}
                <a href=\"{{ base_url }}/bible/{{ current_book }}/{{ current_chapter - 1 }}\" 
                   class=\"px-4 py-2 glass border-slate-800 rounded-lg text-slate-400 hover:text-white transition\">
                   ← Ch. {{ current_chapter - 1 }}
                </a>
            {% else %}
                <span class=\"px-4 py-2 border border-slate-900 bg-slate-950/40 rounded-lg text-slate-700 cursor-not-allowed select-none\">
                    ← Start
                </span>
            {% endif %}

            {# FIXED: Pulls total_chapters cleanly from the layout context #}
            <span class=\"text-sky-400 font-bold px-2\">
                Chapter {{ current_chapter }} of <span id=\"readerTotalChapters\">{{ total_chapters }}</span>
            </span>

            {# FIXED: Navigation buttons point safely to matching paths #}
            <a id=\"readerNextBtn\" href=\"{{ base_url }}/bible/{{ current_book }}/{{ current_chapter + 1 }}\" 
               class=\"px-4 py-2 glass border-slate-800 rounded-lg text-slate-400 hover:text-white transition hidden\">
               Ch. {{ current_chapter + 1 }} →
            </a>
            <span id=\"readerEndBtn\" class=\"px-4 py-2 border border-slate-900 bg-slate-950/40 rounded-lg text-slate-700 cursor-not-allowed select-none hidden\">
                End →
            </span>
        </div>
    </div>

    <div id=\"bible-reader\" class=\"reader-panel p-8 md:p-12 rounded-3xl space-y-6 select-text font-serif text-lg leading-relaxed md:text-xl\">
        
        {% for paragraph in paragraphs %}
            <p class=\"verse-paragraph\">
                {% for verse in paragraph %}
                    <sup class=\"verse-num text-xs font-mono font-bold text-sky-500 {% if not loop.first %}mx-1{% else %}mr-1{% endif %} select-none\" data-verse=\"{{ verse.verse }}\">{{ verse.verse }}</sup>
                    <span class=\"verse-text\" data-verse=\"{{ verse.verse }}\">{{ verse.text }}</span>
                {% endfor %}
            </p>
        {% else %}
            <div class=\"text-center py-12\">
                <p class=\"text-slate-400 font-sans\">Requested scriptural context layout is empty.</p>
            </div>
        {% endfor %}

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const reader = document.getElementById('bible-reader');
    const meta = document.getElementById('bible-meta');
    const currentBook = meta.getAttribute('data-book');
    const currentChapter = parseInt(meta.getAttribute('data-chapter'), 10);
    const isLoggedIn = {{ auth.check ? 'true' : 'false' }};

    // Absolute lookup mapping canonical book slugs to exact physical layout thresholds
    const readerChapterMap = {
        'genesis':50, 'exodus':40, 'leviticus':27, 'numbers':36, 'deuteronomy':34, 'joshua':24, 'judges':21, 'ruth':4,
        '1-samuel':31, '2-samuel':24, '1-kings':22, '2-kings':25, '1-chronicles':29, '2-chronicles':36, 'ezra':10,
        'nehemiah':13, 'esther':10, 'job':42, 'psalms':150, 'proverbs':31, 'ecclesiastes':12, 'song-of-solomon':8,
        'isaiah':66, 'jeremiah':52, 'lamentations':5, 'ezekiel':48, 'daniel':12, 'hosea':14, 'joel':3, 'amos':9,
        'obadiah':1, 'jonah':4, 'micah':7, 'nahum':3, 'habakkuk':3, 'zephaniah':3, 'haggai':2, 'zechariah':14,
        'malachi':4, 'matthew':28, 'mark':16, 'luke':24, 'john':21, 'acts':28, 'romans':16, '1-corinthians':16,
        '2-corinthians':13, 'galatians':6, 'ephesians':6, 'philippians':4, 'colossians':4, '1-thessalonians':5,
        '2-thessalonians':3, '1-timothy':6, '2-timothy':4, 'titus':3, 'philemon':1, 'hebrews':13, 'james':5,
        '1-peter':5, '2-peter':3, '1-john':5, '2-john':1, '3-john':1, 'jude':1, 'revelation':22
    };

    // Dynamic UI Pagination configuration using slug strings
    const totalChaptersCount = readerChapterMap[currentBook] || 50;
    
    // Set text layout limits safely inside the elements
    document.getElementById('readerTotalChapters').textContent = totalChaptersCount;

    const nextBtn = document.getElementById('readerNextBtn');
    const endBtn = document.getElementById('readerEndBtn');

    if (currentChapter < totalChaptersCount) {
        nextBtn.classList.remove('hidden');
    } else {
        endBtn.classList.remove('hidden');
    }

    // --- Highlighting Engine Handlers ---
    loadHighlights();
    reader.addEventListener('mouseup', () => {
        const selection = window.getSelection();
        if (!selection || selection.isCollapsed || selection.toString().trim() === '') return;

        const range = selection.getRangeAt(0);
        const verseTextNode = findVerseParent(range.startContainer);
        if (!verseTextNode) return;

        const verseNumber = verseTextNode.getAttribute('data-verse');
        const parentNode = range.commonAncestorContainer.nodeType === Node.ELEMENT_NODE 
            ? range.commonAncestorContainer 
            : range.commonAncestorContainer.parentNode;

        const existingHighlight = parentNode.closest('.verse-highlight');

        if (existingHighlight) {
            const textNode = document.createTextNode(existingHighlight.textContent);
            existingHighlight.parentNode.replaceChild(textNode, existingHighlight);
            removeHighlight(verseNumber, verseTextNode.innerHTML);
        } else {
            const highlightSpan = document.createElement('span');
            highlightSpan.className = 'verse-highlight bg-yellow-400 text-slate-900 rounded px-0.5';
            
            try {
                range.surroundContents(highlightSpan);
                saveHighlight(verseNumber, verseTextNode.innerHTML);
            } catch (e) {
                console.warn(\"Boundary conflict during cross-node layout interaction tracking.\");
            }
        }
        selection.removeAllRanges();
    });

    function findVerseParent(node) {
        let current = node;
        while (current && current !== reader) {
            if (current.nodeType === Node.ELEMENT_NODE && current.classList.contains('verse-text')) {
                return current;
            }
            current = current.parentNode;
        }
        return null;
    }

    function saveHighlight(verse, completeHTML) {
        const storageKey = `highlight_\${currentBook}_\${currentChapter}`;
        if (!isLoggedIn) {
            let localData = JSON.parse(localStorage.getItem(storageKey)) || {};
            localData[verse] = completeHTML;
            localStorage.setItem(storageKey, JSON.stringify(localData));
        } else {
            sendHighlightToAPI(verse, completeHTML);
        }
    }

    function removeHighlight(verse, completeHTML) {
        const storageKey = `highlight_\${currentBook}_\${currentChapter}`;
        if (!isLoggedIn) {
            let localData = JSON.parse(localStorage.getItem(storageKey)) || {};
            if (!completeHTML.includes('verse-highlight')) {
                delete localData[verse];
            } else {
                localData[verse] = completeHTML;
            }
            if (Object.keys(localData).length === 0) {
                localStorage.removeItem(storageKey);
            } else {
                localStorage.setItem(storageKey, JSON.stringify(localData));
            }
        } else {
            sendHighlightToAPI(verse, completeHTML);
        }
    }

    function sendHighlightToAPI(verse, completeHTML) {
        fetch(`\${window.location.origin}/api/bible/highlight`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                book: currentBook,
                chapter: currentChapter,
                verse: verse,
                html: completeHTML
            })
        }).catch(err => console.error(\"Database selection log connection offline:\", err));
    }

    function loadHighlights() {
        const storageKey = `highlight_\${currentBook}_\${currentChapter}`;
        if (!isLoggedIn) {
            const localData = JSON.parse(localStorage.getItem(storageKey));
            if (!localData) return;

            Object.keys(localData).forEach(verseNum => {
                const targetVerse = reader.querySelector(`.verse-text[data-verse=\"\${verseNum}\"]`);
                if (targetVerse) {
                    targetVerse.innerHTML = localData[verseNum];
                }
            });
        }
    }
});
</script>
{% endblock %}
", "bible/reader.twig", "C:\\wamp\\www\\faith\\views\\themes\\default\\bible\\reader.twig");
    }
}
