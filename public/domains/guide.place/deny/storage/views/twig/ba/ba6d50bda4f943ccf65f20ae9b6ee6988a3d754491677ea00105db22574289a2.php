<?php

/* layouts.search_restaurants_twig_vue */
class __TwigTemplate_7d1d8f568ce01ff98b94533869ced1bea99c08aff53c36e92329332716f2a947 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "set" => 3, "for" => 9, "include" => 41);
        $filters = array("split" => 6, "length" => 10, "slice" => 12, "lower" => 12, "merge" => 13, "escape" => 37, "json_encode" => 37);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for', 'include'),
                array('split', 'length', 'slice', 'lower', 'merge', 'escape', 'json_encode'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "json", array()) == "yes")) {
            // line 2
            echo "
\t";
            // line 3
            $context["items"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array());
            // line 4
            echo "
\t";
            // line 5
            if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array())) {
                // line 6
                echo "\t\t";
                $context["query"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array()), " ");
                // line 7
                echo "\t\t";
                $context["results"] = array();
                // line 8
                echo "
\t\t";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 10
                    echo "\t\t\t";
                    if ((twig_length_filter($this->env, (isset($context["query"]) ? $context["query"] : null)) > 0)) {
                        // line 11
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["query"]) ? $context["query"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["que"]) {
                            // line 12
                            echo "\t\t\t\t\t";
                            if (((twig_length_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)) >= 3) && twig_in_filter(twig_lower_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)), twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array()))))) {
                                // line 13
                                echo "\t\t\t\t\t\t";
                                $context["results"] = twig_array_merge((isset($context["results"]) ? $context["results"] : null), array(0 => $context["item"]));
                                // line 14
                                echo "\t\t\t\t\t";
                            }
                            // line 15
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['que'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 16
                        echo "\t\t\t";
                    }
                    // line 17
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "
\t\t";
                // line 19
                $context["items"] = (isset($context["results"]) ? $context["results"] : null);
                echo "\t\t

\t";
            }
            // line 22
            echo "
\t";
            // line 23
            $context["uniqResults"] = array();
            // line 24
            echo "\t";
            $context["uniqIDs"] = array();
            // line 25
            echo "
\t";
            // line 26
            if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 0)) {
                // line 27
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "\t\t\t";
                    if (!twig_in_filter($this->getAttribute($context["item"], "id", array()), (isset($context["uniqIDs"]) ? $context["uniqIDs"] : null))) {
                        // line 29
                        echo "\t\t\t\t";
                        $context["uniqResults"] = twig_array_merge((isset($context["uniqResults"]) ? $context["uniqResults"] : null), array(0 => $context["item"]));
                        // line 30
                        echo "\t\t\t\t";
                        $context["uniqIDs"] = twig_array_merge((isset($context["uniqIDs"]) ? $context["uniqIDs"] : null), array(0 => $this->getAttribute($context["item"], "id", array())));
                        // line 31
                        echo "\t\t\t";
                    }
                    // line 32
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t";
            }
            // line 34
            echo "
\t";
            // line 35
            $context["items"] = (isset($context["uniqResults"]) ? $context["uniqResults"] : null);
            // line 36
            echo "
<div id=\"ajax-answer\" data-answer=\"";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["uniqResults"]) ? $context["uniqResults"] : null)), "html", null, true));
            echo "\" ";
            if (((twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : null)) == 0) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                echo "data-empty=\"1\"";
            }
            echo "></div>

";
        } else {
            // line 40
            echo "
";
            // line 41
            $this->loadTemplate("header", "layouts.search_restaurants_twig_vue", 41)->display($context);
            // line 42
            echo "<div class=\"data-pages\" style=\"display: none;\" data-answer=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array())), "html", null, true));
            echo "\" ";
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array())) == 0) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                echo "data-empty=\"1\"";
            }
            echo "></div>
<section class=\"search\" id=\"v-search-root\" data-find-inset=\"1\" data-lid=\"";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "layout_id", array()), "html", null, true));
            echo "\">
\t<div class=\"search__wrapper\" :class=\"{'search__wrapper--fw': isFullWidthLayout}\">
\t\t<div v-show=\"isSearchShowlist\" class=\"search-item search-item--list\">
\t\t\t<div class=\"search-filters-cat\" :class=\"{'search-filters-cat--active': isCatFiltersShow}\">
\t\t\t\t<div class=\"search-filters-cat__actions\">
\t\t\t\t\t<button class=\"icon-btn filter_btn\" @click=\"isCatFiltersShow = !isCatFiltersShow\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\"><path d=\"M18.3235 2.62752C18.714 2.23699 18.714 1.60383 18.3235 1.2133C17.933 0.822779 17.2998 0.822779 16.9093 1.2133L9.58343 8.53918L2.25764 1.21339C1.86712 0.822866 1.23396 0.822865 0.84343 1.21339C0.452906 1.60391 0.452906 2.23708 0.84343 2.6276L8.16922 9.95339L0.843499 17.2791C0.452975 17.6696 0.452974 18.3028 0.843499 18.6933C1.23402 19.0838 1.86719 19.0838 2.25771 18.6933L9.58343 11.3676L16.9092 18.6934C17.2998 19.0839 17.9329 19.0839 18.3235 18.6934C18.714 18.3029 18.714 17.6697 18.3235 17.2792L10.9976 9.95339L18.3235 2.62752Z\" fill=\"#2D2727\"/></svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"search-filters-btn-showitems\" :disabled=\"filteredItems.length == 0\" @click=\"isCatFiltersShow = !isCatFiltersShow\">
\t\t\t\t\t\t<span v-if=\"filteredItems.length != 0\">???????????????? {{filteredItems.length}} ??????????????????</span>
\t\t\t\t\t\t<span v-else>0 ??????????????????</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"serch-filters-main-cat__wrapper\">
\t\t\t\t\t<div class=\"filters__wrapper\">
\t\t\t\t\t\t<div class=\"filter__group\">
\t\t\t\t\t\t\t<div class=\"filter filter--restaurants-type\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">?????? ??????????????????</div>
\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"\" name=\"cat-filter-restaurants-type\" @change=\"selectedCatFilters.restaurants.type.items = []\" id=\"cat-filter-restaurants-type-0\">
\t\t\t\t\t\t\t\t\t\t<label for=\"cat-filter-restaurants-type-0\">??????</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(item,i) in catFilters.restaurants.types\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" :value=\"item.value\" name=\"cat-filter-restaurants-type\" @change=\"selectedCatFilters.restaurants.type.items = [item.value]\" :id=\"`cat-filter-restaurants-type-\${i + 1}`\">
\t\t\t\t\t\t\t\t\t\t<label :for=\"`cat-filter-restaurants-type-\${i + 1}`\">{{item.name}}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter filter--restaurants-food\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">??????????</div>
\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(item,i) in catFilters.restaurants.food\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" :value=\"item.value\" name=\"cat-filter-restaurants-food\" v-model=\"selectedCatFilters.restaurants.food.items\" :id=\"`cat-filter-restaurants-food-\${i + 1}`\">
\t\t\t\t\t\t\t\t\t\t<label :for=\"`cat-filter-restaurants-food-\${i + 1}`\">{{item.name}}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter filter--restaurants-other\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">??????????????????????????</div>
\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(item,i) in catFilters.restaurants.other\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" :value=\"item.value\" name=\"cat-filter-restaurants-other\" v-model=\"selectedCatFilters.restaurants.other.items\" :id=\"`cat-filter-restaurants-other-\${i + 1}`\">
\t\t\t\t\t\t\t\t\t\t<label :for=\"`cat-filter-restaurants-other-\${i + 1}`\">{{item.name}}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter filter--price\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"filter-slider\">
\t\t\t\t\t\t\t\t\t<vue-slider 
\t\t\t\t\t\t\t\t\t\tref=\"filter-pricerange\"
\t\t\t\t\t\t\t\t\t\tv-model=\"selectedCatFilters.common.price.range\" 
\t\t\t\t\t\t\t\t\t\t:min=\"selectedCatFilters.common.price.min\" 
\t\t\t\t\t\t\t\t\t\t:max=\"selectedCatFilters.common.price.max\"
\t\t\t\t\t\t\t\t\t\t:enable-cross=\"false\"
\t\t\t\t\t\t\t\t\t\t:tooltip=\"'always'\"
\t\t\t\t\t\t\t\t\t\t:tooltip-formatter=\"selectedCatFilters.common.price.format\"
\t\t\t\t\t\t\t\t\t\t:min-range=\"1\"
\t\t\t\t\t\t\t\t\t\t:contained=\"true\"
\t\t\t\t\t\t\t\t\t\t:lazy=\"true\"
\t\t\t\t\t\t\t\t\t></vue-slider>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"filter__title filter__title--bottom\">????????</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-main\">
\t\t\t\t<div class=\"search-top\">
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<h1 style=\"font-size:24px; padding-left: 15px; font-weight: 100; text-transform: uppercase;\">";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
            echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-totop\" @click=\"scrollToMap\">??????????</div>
\t\t\t\t<div class=\"search-filters\">
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<div class=\"flexer flexer--jcb flexer--aic\">
\t\t\t\t\t\t\t";
            // line 122
            $this->loadTemplate("cityswitcher", "layouts.search_restaurants_twig_vue", 122)->display($context);
            // line 123
            echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"icon-btn filter_btn\" @click=\"isCatFiltersShow = !isCatFiltersShow\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" viewBox=\"0 0 22 18\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.259521 3.46436C0.259521 2.91207 0.707237 2.46436 1.25952 2.46436H20.2595C20.8118 2.46436 21.2595 2.91207 21.2595 3.46436C21.2595 4.01664 20.8118 4.46436 20.2595 4.46436H1.25952C0.707237 4.46436 0.259521 4.01664 0.259521 3.46436Z\" fill=\"#2D2727\"/><line x1=\"1.25952\" y1=\"14.4644\" x2=\"20.2595\" y2=\"14.4644\" stroke=\"#2D2727\" stroke-width=\"2\" stroke-linecap=\"round\"/><circle cx=\"7.25952\" cy=\"14.4644\" r=\"2.95605\" fill=\"#2D2727\"/><circle cx=\"14.3887\" cy=\"3.46436\" r=\"2.95605\" fill=\"#2D2727\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"filters\">
\t\t\t\t\t\t\t<div class=\"filters__wrapper\">
\t\t\t\t\t\t\t\t<div class=\"filter__group\">
\t\t\t\t\t\t\t\t\t<div class=\"filter filter--tags\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tagsearch__input\">
\t\t\t\t\t\t\t\t\t\t\t<vue-tags-input
\t\t\t\t\t\t\t\t\t\t\t\tv-model=\"tag\"
\t\t\t\t\t\t\t\t\t\t\t\t:tags=\"tags\"
\t\t\t\t\t\t\t\t\t\t\t\t:autocomplete-items=\"filteredTags\"
\t\t\t\t\t\t\t\t\t\t\t\t@tags-changed=\"newTags => tags = newTags\"
\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"??????????...\"
\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--div class=\"filter__group filter__group--flex\">
\t\t\t\t\t\t\t\t\t<div class=\"filter filter--date\">
\t\t\t\t\t\t\t\t\t\t<v-date-picker 
\t\t\t\t\t\t\t\t\t\t\tmode='range' 
\t\t\t\t\t\t\t\t\t\t\t:min-date='new Date()'
\t\t\t\t\t\t\t\t\t\t\tv-model='range'
\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"filter filter--sort\">
\t\t\t\t\t\t\t\t\t\t<select v-model=\"sortType\" class=\"form-input form-input--select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" disabled selected>????????????????????</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"priceUp\">???????? ???</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"priceDown\">???????? ???</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-list search-list--skeleton\" v-if=\"!isAppLoaded\">
\t\t\t\t\t<div class=\"search-results__wrapper\">
\t\t\t\t\t\t";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 168
                echo "\t\t\t\t\t\t<div class=\"search-card search-card--skeleton\">
\t\t\t\t\t\t\t<div class=\"search-card__gallery\"></div>
\t\t\t\t\t\t\t<div class=\"search-card__info\">
\t\t\t\t\t\t\t\t<div class=\"search-card__text\">
\t\t\t\t\t\t\t\t\t<div class=\"search-card__title\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"search-card__infoblock search-card__infoblock--address\"> </div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"search-card__actions\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-list\" v-cloak>
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<div class=\"search-warning\" v-show=\"filteredItems.length == 0\" v-cloak>?????????????????????? ???? ???????????? ?????????????? ??????</div>
\t\t\t\t\t\t<transition-group 
\t\t\t\t\t    mode=\"out-in\" 
\t\t\t\t\t    name=\"search-transition2\" 
\t\t\t\t\t    tag=\"div\" 
\t\t\t\t\t    class=\"search-results__wrapper\"
\t\t\t\t\t>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tv-for=\"item in pageItems\"
\t\t\t\t\t\t\t:key=\"item.path\" 
\t\t\t\t\t\t\tclass=\"search-card\">
\t\t\t\t\t\t\t<div v-if=\"item.field_gallery.length > 0\" class=\"search-card__gallery splide\" :style=\"`background: url(/site/data/images/medium/\${item.field_gallery[0]}) no-repeat center / cover`\">
\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper splide__track\">
\t\t\t\t\t\t\t\t\t<div class=\"splide__list\">
\t\t\t\t\t\t\t\t\t\t<a :href=\"item.path\" v-for=\"img in item.field_gallery\" class=\"search-card__gallery-item splide__slide\">
\t\t\t\t\t\t\t\t\t\t\t<img :src=\"'/site/data/images/medium/' + img\">
\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div v-else class=\"search-card__gallery\">
\t\t\t\t\t\t\t\t<div  class=\"search-card__gallery-item search-card__gallery-item--noimage\">
\t\t\t\t\t\t\t\t\t<img src=\"/site/theme/images/noimage.png\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search-card__info\">
\t\t\t\t\t\t\t\t<div class=\"search-card__text\">
\t\t\t\t\t\t\t\t\t<div class=\"search-card__title\">{{item.field_header}}</div>
\t\t\t\t\t\t\t\t\t<div v-if=\"item.field_address\" class=\"search-card__infoblock search-card__infoblock--address\">
\t\t\t\t\t\t\t\t\t\t<span class=\"search-card__infoblock-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"19\" viewBox=\"0 0 12 19\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z\" fill=\"#14C5D0\"></path>
\t\t\t\t\t\t\t\t\t\t\t</svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"25\" viewBox=\"0 0 19 25\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z\" fill=\"#14C5D0\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t{{item.field_address}} {{item.field_coords}}
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<div v-if=\"item.field_prices\" class=\"search-card__infoblock search-card__infoblock--price\">
\t\t\t\t\t\t\t\t\t\t<span class=\"search-card__infoblock-icon\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"17\" viewBox=\"0 0 17 17\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.49301 4.41122C3.99972 4.95159 3.16428 4.96627 2.65314 4.45528C2.15566 3.95793 2.15671 3.1542 2.65419 2.65685C3.16533 2.14586 4.00077 2.1595 4.49406 2.69987C4.93172 3.17833 4.93067 3.93275 4.49301 4.41226V4.41122ZM5.98023 0.252989L2.38446 0.00536361C1.71065 -0.0408039 1.09456 0.214167 0.656896 0.65066L0.651648 0.655906C0.216084 1.0924 -0.0400071 1.70937 0.0051237 2.38299L0.250719 5.98196C0.303197 6.74582 0.629607 7.46457 1.17118 8.00599L9.84258 16.675C10.276 17.1083 10.9803 17.1083 11.4138 16.675L16.6741 11.4161C17.1086 10.9817 17.1086 10.2776 16.6741 9.8443L8.00166 1.17424C7.46114 0.633872 6.74325 0.307551 5.98023 0.254039V0.252989Z\" fill=\"#14C5D0\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t {{item.field_prices}}???
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"search-card__actions\">
\t\t\t\t\t\t\t\t\t<div class=\"search-card__action\">
\t\t\t\t\t\t\t\t\t\t<button class=\"ibtn\" @click=\"showOnMap(item.field_coords)\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"16\" viewBox=\"0 0 21 16\" fill=\"none\"><path d=\"M1.40094 0.0727141L1.43665 0.080906L7.75398 1.98669L14.0716 0.080906C14.1552 0.061573 14.241 0.061573 14.3246 0.080906L20.6812 1.99848C20.7553 2.02044 20.8189 2.06959 20.8625 2.12988C20.9047 2.18854 20.9306 2.26194 20.9306 2.33599V4.76573C20.9306 4.92531 20.8012 5.05442 20.6419 5.05442C20.4823 5.05442 20.3532 4.92499 20.3532 4.76573V2.5018L14.4871 0.732004V2.18657C14.4871 2.34615 14.3577 2.47526 14.1984 2.47526C14.0389 2.47526 13.9098 2.34582 13.9098 2.18657V0.732004L8.04332 2.5018V3.89575C8.04332 4.05533 7.91389 4.18443 7.75463 4.18443C7.59505 4.18443 7.46595 4.055 7.46595 3.89575V2.5018L1.59984 0.732004V5.37358C1.59984 5.53316 1.4704 5.66226 1.31115 5.66226C1.15157 5.66226 1.02247 5.53283 1.02247 5.37358V0.391873C1.02247 0.361727 1.02771 0.329614 1.03721 0.297502C1.05655 0.230328 1.0962 0.173312 1.14993 0.132352L1.17484 0.115312C1.2253 0.0835275 1.28232 0.0664882 1.34392 0.0664882C1.36194 0.0664882 1.3816 0.0684542 1.40192 0.0723864L1.40094 0.0727141ZM20.3532 7.47236C20.3532 7.31278 20.4827 7.18368 20.6419 7.18368C20.8015 7.18368 20.9306 7.31311 20.9306 7.47236V14.7406C20.9306 14.7721 20.925 14.8052 20.9152 14.8376L20.9149 14.8386C20.8949 14.9048 20.8559 14.9608 20.8022 15.0011C20.7904 15.01 20.7779 15.0182 20.7651 15.025C20.7176 15.0519 20.6649 15.0663 20.6095 15.0663C20.578 15.0663 20.5466 15.0614 20.5154 15.0519L14.1981 13.1461L7.88046 15.0519C7.81525 15.0712 7.69238 15.0712 7.62749 15.0519L1.27183 13.1347C1.25676 13.1304 1.24267 13.1245 1.22891 13.1179C1.17254 13.0921 1.12405 13.0511 1.08964 13.0026L1.08866 13.0013C1.04737 12.9439 1.02148 12.8712 1.02148 12.7965V9.26804C1.02148 9.10846 1.15092 8.97936 1.31017 8.97936C1.46975 8.97936 1.59885 9.10879 1.59885 9.26804V12.6304L7.46497 14.4002V12.8525C7.46497 12.6929 7.5944 12.5638 7.75365 12.5638C7.91323 12.5638 8.04234 12.6933 8.04234 12.8525V14.4002L13.9088 12.6304V3.5412C13.9088 3.38162 14.0382 3.25251 14.1975 3.25251C14.357 3.25251 14.4861 3.38194 14.4861 3.5412V12.6304L20.3523 14.4002V7.47203L20.3532 7.47236ZM7.46529 6.60237C7.46529 6.44279 7.59473 6.31369 7.75398 6.31369C7.91356 6.31369 8.04266 6.44312 8.04266 6.60237V10.1466C8.04266 10.3061 7.91323 10.4352 7.75398 10.4352C7.5944 10.4352 7.46529 10.3058 7.46529 10.1466V6.60237ZM1.59918 8.00386C1.59918 8.16344 1.46975 8.29254 1.3105 8.29254C1.15092 8.29254 1.02181 8.16311 1.02181 8.00386V6.63842C1.02181 6.47884 1.15125 6.34973 1.3105 6.34973C1.47008 6.34973 1.59918 6.47917 1.59918 6.63842V8.00386Z\" fill=\"#E85768\" stroke=\"#E85768\" stroke-width=\"0.1\"/></svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</transition-group>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"search-item search-item--map\">
\t\t\t<span class=\"search-switchmode\" @click=\"scrollToList\">????????????</span>
\t\t\t<div id=\"map\" style=\"width: 100%; height: calc(100vh);\"></div>
\t\t</div>
\t</div>
</section>
<script src=\"https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\t
    ymaps.ready(init);
    function init(){
        // ???????????????? ??????????.
\t\twindow.myMap = new ymaps.Map('map', {
\t\t\tcenter: [";
            // line 259
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_coords", array()), "html", null, true));
            echo "],
\t\t\tcontrols: ['zoomControl'],
\t\t\tzoom: ";
            // line 261
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_initial_zoom", array())) ? ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_initial_zoom", array())) : (12)), "html", null, true));
            echo "
        }, {
            searchControlProvider: 'yandex#search'
        })
\t\t
        var\tobjectManager = new ymaps.ObjectManager({
\t\t\tclusterize: true,
\t\t\tgridSize: 32,
\t\t\t//clusterDisableClickZoom: true,
            //geoObjectOpenBalloonOnClick: false,
            clusterOpenBalloonOnClick: false
\t\t});
\t\t
\t\t
\t\t
\t\tobjectManager.objects.options.set('preset', 'islands#redStretchyIcon')
\t\tobjectManager.clusters.options.set('preset', 'islands#redClusterIcons')
\t\t
\t\t//console.log(objectManager.objects)
\t\t
\t\tfunction onObjectEvent (e) {
\t\t\tvar objectId = e.get('objectId');
\t\t\tif (e.get('type') == 'mouseenter') {
\t\t\t\t// ?????????? setObjectOptions ?????????????????? ???????????????? ?????????? ?????????????? \"???? ????????\".
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#yellowCircleDotIcon'
\t\t\t\t});
\t\t\t} else {
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#redCircleDotIcon'
\t\t\t\t});
\t\t\t}
\t\t}

\t\tfunction onClusterEvent (e) {
\t\t\tvar objectId = e.get('objectId');
\t\t\tif (e.get('type') == 'mouseenter') {
\t\t\t\tobjectManager.clusters.setClusterOptions(objectId, {
\t\t\t\t\tpreset: 'islands#yellowClusterIcons'
\t\t\t\t});
\t\t\t} else {
\t\t\t\tobjectManager.clusters.setClusterOptions(objectId, {
\t\t\t\t\tpreset: 'islands#redClusterIcons'
\t\t\t\t});
\t\t\t}
\t\t}

\t\tobjectManager.objects.events.add(['mouseenter', 'mouseleave'], onObjectEvent);
\t\tobjectManager.clusters.events.add(['mouseenter', 'mouseleave'], onClusterEvent);
\t\t
\t\tconst json = { 
\t\t   \"type\":\"FeatureCollection\",
\t\t   \"features\":[ 
\t\t\t\t{ 
\t\t\t\t\t\"type\":\"Feature\",
\t\t\t\t\t\"id\":0,
\t\t\t\t\t\"geometry\":{ 
\t\t\t\t\t\"type\":\"Point\",
\t\t\t\t\t\"coordinates\":[ 
\t\t\t\t\t\t53.215555,
\t\t\t\t\t    50.187128
\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\t\"properties\":{ 
\t\t\t\t\t\t\"balloonContentHeader\":\"<font size=3><b><a target='_blank' href='https://yandex.ru'>?????????? ?????????? ???????? ???????? ????????????</a></b></font>\",
\t\t\t\t\t\t\"balloonContentBody\":\"<p>???????? ??????: <input name='login'></p><p><em>?????????????? ?? ?????????????? 2xxx-xxx:</em>  <input></p><p><input type='submit' value='??????????????????'></p>\",
\t\t\t\t\t\t\"balloonContentFooter\":\"<font size=1>???????????????????? ??????????????????????????: </font> <strong>???????? ??????????????</strong>\",
\t\t\t\t\t\t\"clusterCaption\":\"<strong><s>??????</s> ????????</strong> ??????????\",
\t\t\t\t\t\t\"hintContent\":\"<strong>??????????  <s>??????????????????</s></strong>\"
\t\t\t\t\t}
\t\t\t\t}
\t\t  \t]
\t\t }
\t\t
\t\t
\t\t//objectManager.objects.options.set('preset', 'islands#greenDotIcon');
\t\t//objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
\t\tmyMap.geoObjects.add(objectManager);

\t\t
\t\t//objectManager.add(json);
\t\t
\t\t
\t\t
\t\t
\t\tdocument.addEventListener('redrawMap', function(e) {
\t\t\tobjectManager.removeAll()
\t\t\t//console.log(e.detail)
\t\t\tlet objects = e.detail
\t\t\t
\t\t\t/*
\t\t\tobjects.searchInside(myMap)
        // ?? ?????????? ?????????????? ?????????????????? ?????????????? ???? ??????????.
\t\t\t\t.addToMap(myMap);

\t\t\tmyMap.events.add('boundschange', function () {
\t\t\t\t// ?????????? ?????????????? ???????????? ?????????? ?????????? ????????????????, ?????????? ?????????????? ???????????????? ?? ?????????????? ??????????????.
\t\t\t\tvar visibleObjects = objects.searchInside(myMap).objectManager.add(myMap);
\t\t\t\t// ???????????????????? ?????????????? ?????????? ?????????????? ?? ??????????.
\t\t\t\tobjects.remove(visibleObjects).removeFromMap(myMap);
\t\t\t});
\t\t\t*/
\t\t\t
\t\t\tobjectManager.add(e.detail);
\t\t\t//console.log(objectManager.objects)
\t\t\t/*myMap.geoObjects.add(new ymaps.Placemark([53.201717, 50.141131], {
            balloonContent: '???????? <strong>???????????????????? ????????</strong>'
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        }));*/
\t\t})
\t\t
\t\t
    }
\t
\t
\t
</script>
<!--script src=\"https://unpkg.com/swiper/swiper-bundle.js\"></script-->

<script src=\"https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js\"></script>
<script src=\"/site/theme/js/search_twig.js\"></script>
";
            // line 385
            $this->loadTemplate("footer", "layouts.search_restaurants_twig_vue", 385)->display($context);
            // line 386
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.search_restaurants_twig_vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 386,  547 => 385,  420 => 261,  415 => 259,  333 => 179,  317 => 168,  313 => 167,  267 => 123,  265 => 122,  255 => 115,  180 => 43,  171 => 42,  169 => 41,  166 => 40,  156 => 37,  153 => 36,  151 => 35,  148 => 34,  145 => 33,  139 => 32,  136 => 31,  133 => 30,  130 => 29,  127 => 28,  122 => 27,  120 => 26,  117 => 25,  114 => 24,  112 => 23,  109 => 22,  103 => 19,  100 => 18,  94 => 17,  91 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  71 => 11,  68 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if request.input.json == 'yes' %}*/
/* */
/* 	{% set items = page.active_sub_pages %}*/
/* */
/* 	{% if request.input.query %}*/
/* 		{% set query = request.input.query|split(' ') %}*/
/* 		{% set results = [] %}*/
/* */
/* 		{% for item in items %}*/
/* 			{% if query|length > 0 %}*/
/* 				{% for que in query %}*/
/* 					{% if que|slice(0, -1)|length >= 3 and que|slice(0, -1)|lower in item.field_header|lower %}*/
/* 						{% set results = results|merge([item]) %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* */
/* 		{% set items = results %}		*/
/* */
/* 	{% endif %}*/
/* */
/* 	{% set uniqResults = [] %}*/
/* 	{% set uniqIDs = [] %}*/
/* */
/* 	{% if items|length > 0 %}*/
/* 		{% for item in items %}*/
/* 			{% if item.id not in uniqIDs %}*/
/* 				{% set uniqResults = uniqResults|merge([item]) %}*/
/* 				{% set uniqIDs = uniqIDs|merge([item.id]) %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* */
/* 	{% set items = uniqResults %}*/
/* */
/* <div id="ajax-answer" data-answer="{$ uniqResults|json_encode() $}" {% if results|length == 0 and query[0] != '' %}data-empty="1"{% endif %}></div>*/
/* */
/* {% else %}*/
/* */
/* {% include 'header' %}*/
/* <div class="data-pages" style="display: none;" data-answer="{$ page.active_sub_pages|json_encode() $}" {% if page.active_sub_pages|length == 0 and query[0] != '' %}data-empty="1"{% endif %}></div>*/
/* <section class="search" id="v-search-root" data-find-inset="1" data-lid="{$ page.layout_id $}">*/
/* 	<div class="search__wrapper" :class="{'search__wrapper--fw': isFullWidthLayout}">*/
/* 		<div v-show="isSearchShowlist" class="search-item search-item--list">*/
/* 			<div class="search-filters-cat" :class="{'search-filters-cat--active': isCatFiltersShow}">*/
/* 				<div class="search-filters-cat__actions">*/
/* 					<button class="icon-btn filter_btn" @click="isCatFiltersShow = !isCatFiltersShow">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none"><path d="M18.3235 2.62752C18.714 2.23699 18.714 1.60383 18.3235 1.2133C17.933 0.822779 17.2998 0.822779 16.9093 1.2133L9.58343 8.53918L2.25764 1.21339C1.86712 0.822866 1.23396 0.822865 0.84343 1.21339C0.452906 1.60391 0.452906 2.23708 0.84343 2.6276L8.16922 9.95339L0.843499 17.2791C0.452975 17.6696 0.452974 18.3028 0.843499 18.6933C1.23402 19.0838 1.86719 19.0838 2.25771 18.6933L9.58343 11.3676L16.9092 18.6934C17.2998 19.0839 17.9329 19.0839 18.3235 18.6934C18.714 18.3029 18.714 17.6697 18.3235 17.2792L10.9976 9.95339L18.3235 2.62752Z" fill="#2D2727"/></svg>*/
/* 					</button>*/
/* 					<button class="search-filters-btn-showitems" :disabled="filteredItems.length == 0" @click="isCatFiltersShow = !isCatFiltersShow">*/
/* 						<span v-if="filteredItems.length != 0">???????????????? {{filteredItems.length}} ??????????????????</span>*/
/* 						<span v-else>0 ??????????????????</span>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="serch-filters-main-cat__wrapper">*/
/* 					<div class="filters__wrapper">*/
/* 						<div class="filter__group">*/
/* 							<div class="filter filter--restaurants-type">*/
/* 								<div class="filter__title">?????? ??????????????????</div>*/
/* 								<div class="filter-radios">*/
/* 									<div class="filter-radio">*/
/* 										<input type="radio" value="" name="cat-filter-restaurants-type" @change="selectedCatFilters.restaurants.type.items = []" id="cat-filter-restaurants-type-0">*/
/* 										<label for="cat-filter-restaurants-type-0">??????</label>*/
/* 									</div>*/
/* 									<div class="filter-radio" v-for="(item,i) in catFilters.restaurants.types">*/
/* 										<input type="radio" :value="item.value" name="cat-filter-restaurants-type" @change="selectedCatFilters.restaurants.type.items = [item.value]" :id="`cat-filter-restaurants-type-${i + 1}`">*/
/* 										<label :for="`cat-filter-restaurants-type-${i + 1}`">{{item.name}}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="filter filter--restaurants-food">*/
/* 								<div class="filter__title">??????????</div>*/
/* 								<div class="filter-radios">*/
/* 									<div class="filter-radio" v-for="(item,i) in catFilters.restaurants.food">*/
/* 										<input type="checkbox" :value="item.value" name="cat-filter-restaurants-food" v-model="selectedCatFilters.restaurants.food.items" :id="`cat-filter-restaurants-food-${i + 1}`">*/
/* 										<label :for="`cat-filter-restaurants-food-${i + 1}`">{{item.name}}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="filter filter--restaurants-other">*/
/* 								<div class="filter__title">??????????????????????????</div>*/
/* 								<div class="filter-radios">*/
/* 									<div class="filter-radio" v-for="(item,i) in catFilters.restaurants.other">*/
/* 										<input type="checkbox" :value="item.value" name="cat-filter-restaurants-other" v-model="selectedCatFilters.restaurants.other.items" :id="`cat-filter-restaurants-other-${i + 1}`">*/
/* 										<label :for="`cat-filter-restaurants-other-${i + 1}`">{{item.name}}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="filter filter--price">*/
/* 								*/
/* 								<div class="filter-slider">*/
/* 									<vue-slider */
/* 										ref="filter-pricerange"*/
/* 										v-model="selectedCatFilters.common.price.range" */
/* 										:min="selectedCatFilters.common.price.min" */
/* 										:max="selectedCatFilters.common.price.max"*/
/* 										:enable-cross="false"*/
/* 										:tooltip="'always'"*/
/* 										:tooltip-formatter="selectedCatFilters.common.price.format"*/
/* 										:min-range="1"*/
/* 										:contained="true"*/
/* 										:lazy="true"*/
/* 									></vue-slider>*/
/* 								</div>*/
/* 								<div class="filter__title filter__title--bottom">????????</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="search-main">*/
/* 				<div class="search-top">*/
/* 					<div class="cont">*/
/* 						<h1 style="font-size:24px; padding-left: 15px; font-weight: 100; text-transform: uppercase;">{$ page.field_header $}</h1>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="search-totop" @click="scrollToMap">??????????</div>*/
/* 				<div class="search-filters">*/
/* 					<div class="cont">*/
/* 						<div class="flexer flexer--jcb flexer--aic">*/
/* 							{% include 'cityswitcher' %}*/
/* 							<div>*/
/* 							<button class="icon-btn filter_btn" @click="isCatFiltersShow = !isCatFiltersShow">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.259521 3.46436C0.259521 2.91207 0.707237 2.46436 1.25952 2.46436H20.2595C20.8118 2.46436 21.2595 2.91207 21.2595 3.46436C21.2595 4.01664 20.8118 4.46436 20.2595 4.46436H1.25952C0.707237 4.46436 0.259521 4.01664 0.259521 3.46436Z" fill="#2D2727"/><line x1="1.25952" y1="14.4644" x2="20.2595" y2="14.4644" stroke="#2D2727" stroke-width="2" stroke-linecap="round"/><circle cx="7.25952" cy="14.4644" r="2.95605" fill="#2D2727"/><circle cx="14.3887" cy="3.46436" r="2.95605" fill="#2D2727"/></svg>*/
/* 							</button>*/
/* 							</div>	*/
/* 						</div>*/
/* 						<div class="filters">*/
/* 							<div class="filters__wrapper">*/
/* 								<div class="filter__group">*/
/* 									<div class="filter filter--tags">*/
/* 										<div class="tagsearch__input">*/
/* 											<vue-tags-input*/
/* 												v-model="tag"*/
/* 												:tags="tags"*/
/* 												:autocomplete-items="filteredTags"*/
/* 												@tags-changed="newTags => tags = newTags"*/
/* 												placeholder="??????????..."*/
/* 											/>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<!--div class="filter__group filter__group--flex">*/
/* 									<div class="filter filter--date">*/
/* 										<v-date-picker */
/* 											mode='range' */
/* 											:min-date='new Date()'*/
/* 											v-model='range'*/
/* 										/>*/
/* 									</div>*/
/* 									<div class="filter filter--sort">*/
/* 										<select v-model="sortType" class="form-input form-input--select">*/
/* 											<option value="0" disabled selected>????????????????????</option>*/
/* 											<option value="priceUp">???????? ???</option>*/
/* 											<option value="priceDown">???????? ???</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div-->*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="search-list search-list--skeleton" v-if="!isAppLoaded">*/
/* 					<div class="search-results__wrapper">*/
/* 						{% for item in 1..4 %}*/
/* 						<div class="search-card search-card--skeleton">*/
/* 							<div class="search-card__gallery"></div>*/
/* 							<div class="search-card__info">*/
/* 								<div class="search-card__text">*/
/* 									<div class="search-card__title"></div>*/
/* 									<div class="search-card__infoblock search-card__infoblock--address"> </div> */
/* 								</div>*/
/* 								<div class="search-card__actions"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="search-list" v-cloak>*/
/* 					<div class="cont">*/
/* 						<div class="search-warning" v-show="filteredItems.length == 0" v-cloak>?????????????????????? ???? ???????????? ?????????????? ??????</div>*/
/* 						<transition-group */
/* 					    mode="out-in" */
/* 					    name="search-transition2" */
/* 					    tag="div" */
/* 					    class="search-results__wrapper"*/
/* 					>*/
/* 						<div*/
/* 							v-for="item in pageItems"*/
/* 							:key="item.path" */
/* 							class="search-card">*/
/* 							<div v-if="item.field_gallery.length > 0" class="search-card__gallery splide" :style="`background: url(/site/data/images/medium/${item.field_gallery[0]}) no-repeat center / cover`">*/
/* 								<div class="swiper-wrapper splide__track">*/
/* 									<div class="splide__list">*/
/* 										<a :href="item.path" v-for="img in item.field_gallery" class="search-card__gallery-item splide__slide">*/
/* 											<img :src="'/site/data/images/medium/' + img">*/
/* 										</a> */
/* 									</div>*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* 							<div v-else class="search-card__gallery">*/
/* 								<div  class="search-card__gallery-item search-card__gallery-item--noimage">*/
/* 									<img src="/site/theme/images/noimage.png">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="search-card__info">*/
/* 								<div class="search-card__text">*/
/* 									<div class="search-card__title">{{item.field_header}}</div>*/
/* 									<div v-if="item.field_address" class="search-card__infoblock search-card__infoblock--address">*/
/* 										<span class="search-card__infoblock-icon">*/
/* 											<!--svg xmlns="http://www.w3.org/2000/svg" width="12" height="19" viewBox="0 0 12 19" fill="none">*/
/* 												<path fill-rule="evenodd" clip-rule="evenodd" d="M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z" fill="#14C5D0"></path>*/
/* 											</svg-->*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">*/
/* 													<path d="M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z" fill="#14C5D0"/>*/
/* 												</svg>*/
/* 										</span>*/
/* 										{{item.field_address}} {{item.field_coords}}*/
/* 									</div> */
/* 									<div v-if="item.field_prices" class="search-card__infoblock search-card__infoblock--price">*/
/* 										<span class="search-card__infoblock-icon">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">*/
/* 												<path fill-rule="evenodd" clip-rule="evenodd" d="M4.49301 4.41122C3.99972 4.95159 3.16428 4.96627 2.65314 4.45528C2.15566 3.95793 2.15671 3.1542 2.65419 2.65685C3.16533 2.14586 4.00077 2.1595 4.49406 2.69987C4.93172 3.17833 4.93067 3.93275 4.49301 4.41226V4.41122ZM5.98023 0.252989L2.38446 0.00536361C1.71065 -0.0408039 1.09456 0.214167 0.656896 0.65066L0.651648 0.655906C0.216084 1.0924 -0.0400071 1.70937 0.0051237 2.38299L0.250719 5.98196C0.303197 6.74582 0.629607 7.46457 1.17118 8.00599L9.84258 16.675C10.276 17.1083 10.9803 17.1083 11.4138 16.675L16.6741 11.4161C17.1086 10.9817 17.1086 10.2776 16.6741 9.8443L8.00166 1.17424C7.46114 0.633872 6.74325 0.307551 5.98023 0.254039V0.252989Z" fill="#14C5D0"/>*/
/* 											</svg>*/
/* 										</span>*/
/* 										 {{item.field_prices}}???*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="search-card__actions">*/
/* 									<div class="search-card__action">*/
/* 										<button class="ibtn" @click="showOnMap(item.field_coords)">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none"><path d="M1.40094 0.0727141L1.43665 0.080906L7.75398 1.98669L14.0716 0.080906C14.1552 0.061573 14.241 0.061573 14.3246 0.080906L20.6812 1.99848C20.7553 2.02044 20.8189 2.06959 20.8625 2.12988C20.9047 2.18854 20.9306 2.26194 20.9306 2.33599V4.76573C20.9306 4.92531 20.8012 5.05442 20.6419 5.05442C20.4823 5.05442 20.3532 4.92499 20.3532 4.76573V2.5018L14.4871 0.732004V2.18657C14.4871 2.34615 14.3577 2.47526 14.1984 2.47526C14.0389 2.47526 13.9098 2.34582 13.9098 2.18657V0.732004L8.04332 2.5018V3.89575C8.04332 4.05533 7.91389 4.18443 7.75463 4.18443C7.59505 4.18443 7.46595 4.055 7.46595 3.89575V2.5018L1.59984 0.732004V5.37358C1.59984 5.53316 1.4704 5.66226 1.31115 5.66226C1.15157 5.66226 1.02247 5.53283 1.02247 5.37358V0.391873C1.02247 0.361727 1.02771 0.329614 1.03721 0.297502C1.05655 0.230328 1.0962 0.173312 1.14993 0.132352L1.17484 0.115312C1.2253 0.0835275 1.28232 0.0664882 1.34392 0.0664882C1.36194 0.0664882 1.3816 0.0684542 1.40192 0.0723864L1.40094 0.0727141ZM20.3532 7.47236C20.3532 7.31278 20.4827 7.18368 20.6419 7.18368C20.8015 7.18368 20.9306 7.31311 20.9306 7.47236V14.7406C20.9306 14.7721 20.925 14.8052 20.9152 14.8376L20.9149 14.8386C20.8949 14.9048 20.8559 14.9608 20.8022 15.0011C20.7904 15.01 20.7779 15.0182 20.7651 15.025C20.7176 15.0519 20.6649 15.0663 20.6095 15.0663C20.578 15.0663 20.5466 15.0614 20.5154 15.0519L14.1981 13.1461L7.88046 15.0519C7.81525 15.0712 7.69238 15.0712 7.62749 15.0519L1.27183 13.1347C1.25676 13.1304 1.24267 13.1245 1.22891 13.1179C1.17254 13.0921 1.12405 13.0511 1.08964 13.0026L1.08866 13.0013C1.04737 12.9439 1.02148 12.8712 1.02148 12.7965V9.26804C1.02148 9.10846 1.15092 8.97936 1.31017 8.97936C1.46975 8.97936 1.59885 9.10879 1.59885 9.26804V12.6304L7.46497 14.4002V12.8525C7.46497 12.6929 7.5944 12.5638 7.75365 12.5638C7.91323 12.5638 8.04234 12.6933 8.04234 12.8525V14.4002L13.9088 12.6304V3.5412C13.9088 3.38162 14.0382 3.25251 14.1975 3.25251C14.357 3.25251 14.4861 3.38194 14.4861 3.5412V12.6304L20.3523 14.4002V7.47203L20.3532 7.47236ZM7.46529 6.60237C7.46529 6.44279 7.59473 6.31369 7.75398 6.31369C7.91356 6.31369 8.04266 6.44312 8.04266 6.60237V10.1466C8.04266 10.3061 7.91323 10.4352 7.75398 10.4352C7.5944 10.4352 7.46529 10.3058 7.46529 10.1466V6.60237ZM1.59918 8.00386C1.59918 8.16344 1.46975 8.29254 1.3105 8.29254C1.15092 8.29254 1.02181 8.16311 1.02181 8.00386V6.63842C1.02181 6.47884 1.15125 6.34973 1.3105 6.34973C1.47008 6.34973 1.59918 6.47917 1.59918 6.63842V8.00386Z" fill="#E85768" stroke="#E85768" stroke-width="0.1"/></svg>*/
/* 										</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							</div>*/
/* 						</transition-group>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="search-item search-item--map">*/
/* 			<span class="search-switchmode" @click="scrollToList">????????????</span>*/
/* 			<div id="map" style="width: 100%; height: calc(100vh);"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script src="https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU" type="text/javascript"></script>*/
/* <script type="text/javascript">*/
/* 	*/
/*     ymaps.ready(init);*/
/*     function init(){*/
/*         // ???????????????? ??????????.*/
/* 		window.myMap = new ymaps.Map('map', {*/
/* 			center: [{$ page.parent_page.field_coords $}],*/
/* 			controls: ['zoomControl'],*/
/* 			zoom: {$ page.parent_page.field_initial_zoom ? page.parent_page.field_initial_zoom : 12 $}*/
/*         }, {*/
/*             searchControlProvider: 'yandex#search'*/
/*         })*/
/* 		*/
/*         var	objectManager = new ymaps.ObjectManager({*/
/* 			clusterize: true,*/
/* 			gridSize: 32,*/
/* 			//clusterDisableClickZoom: true,*/
/*             //geoObjectOpenBalloonOnClick: false,*/
/*             clusterOpenBalloonOnClick: false*/
/* 		});*/
/* 		*/
/* 		*/
/* 		*/
/* 		objectManager.objects.options.set('preset', 'islands#redStretchyIcon')*/
/* 		objectManager.clusters.options.set('preset', 'islands#redClusterIcons')*/
/* 		*/
/* 		//console.log(objectManager.objects)*/
/* 		*/
/* 		function onObjectEvent (e) {*/
/* 			var objectId = e.get('objectId');*/
/* 			if (e.get('type') == 'mouseenter') {*/
/* 				// ?????????? setObjectOptions ?????????????????? ???????????????? ?????????? ?????????????? "???? ????????".*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#yellowCircleDotIcon'*/
/* 				});*/
/* 			} else {*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#redCircleDotIcon'*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		function onClusterEvent (e) {*/
/* 			var objectId = e.get('objectId');*/
/* 			if (e.get('type') == 'mouseenter') {*/
/* 				objectManager.clusters.setClusterOptions(objectId, {*/
/* 					preset: 'islands#yellowClusterIcons'*/
/* 				});*/
/* 			} else {*/
/* 				objectManager.clusters.setClusterOptions(objectId, {*/
/* 					preset: 'islands#redClusterIcons'*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		objectManager.objects.events.add(['mouseenter', 'mouseleave'], onObjectEvent);*/
/* 		objectManager.clusters.events.add(['mouseenter', 'mouseleave'], onClusterEvent);*/
/* 		*/
/* 		const json = { */
/* 		   "type":"FeatureCollection",*/
/* 		   "features":[ */
/* 				{ */
/* 					"type":"Feature",*/
/* 					"id":0,*/
/* 					"geometry":{ */
/* 					"type":"Point",*/
/* 					"coordinates":[ */
/* 						53.215555,*/
/* 					    50.187128*/
/* 					]*/
/* 					},*/
/* 					"properties":{ */
/* 						"balloonContentHeader":"<font size=3><b><a target='_blank' href='https://yandex.ru'>?????????? ?????????? ???????? ???????? ????????????</a></b></font>",*/
/* 						"balloonContentBody":"<p>???????? ??????: <input name='login'></p><p><em>?????????????? ?? ?????????????? 2xxx-xxx:</em>  <input></p><p><input type='submit' value='??????????????????'></p>",*/
/* 						"balloonContentFooter":"<font size=1>???????????????????? ??????????????????????????: </font> <strong>???????? ??????????????</strong>",*/
/* 						"clusterCaption":"<strong><s>??????</s> ????????</strong> ??????????",*/
/* 						"hintContent":"<strong>??????????  <s>??????????????????</s></strong>"*/
/* 					}*/
/* 				}*/
/* 		  	]*/
/* 		 }*/
/* 		*/
/* 		*/
/* 		//objectManager.objects.options.set('preset', 'islands#greenDotIcon');*/
/* 		//objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');*/
/* 		myMap.geoObjects.add(objectManager);*/
/* */
/* 		*/
/* 		//objectManager.add(json);*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		document.addEventListener('redrawMap', function(e) {*/
/* 			objectManager.removeAll()*/
/* 			//console.log(e.detail)*/
/* 			let objects = e.detail*/
/* 			*/
/* 			/**/
/* 			objects.searchInside(myMap)*/
/*         // ?? ?????????? ?????????????? ?????????????????? ?????????????? ???? ??????????.*/
/* 				.addToMap(myMap);*/
/* */
/* 			myMap.events.add('boundschange', function () {*/
/* 				// ?????????? ?????????????? ???????????? ?????????? ?????????? ????????????????, ?????????? ?????????????? ???????????????? ?? ?????????????? ??????????????.*/
/* 				var visibleObjects = objects.searchInside(myMap).objectManager.add(myMap);*/
/* 				// ???????????????????? ?????????????? ?????????? ?????????????? ?? ??????????.*/
/* 				objects.remove(visibleObjects).removeFromMap(myMap);*/
/* 			});*/
/* 			*//* */
/* 			*/
/* 			objectManager.add(e.detail);*/
/* 			//console.log(objectManager.objects)*/
/* 			/*myMap.geoObjects.add(new ymaps.Placemark([53.201717, 50.141131], {*/
/*             balloonContent: '???????? <strong>???????????????????? ????????</strong>'*/
/*         }, {*/
/*             preset: 'islands#circleIcon',*/
/*             iconColor: '#3caa3c'*/
/*         }));*//* */
/* 		})*/
/* 		*/
/* 		*/
/*     }*/
/* 	*/
/* 	*/
/* 	*/
/* </script>*/
/* <!--script src="https://unpkg.com/swiper/swiper-bundle.js"></script-->*/
/* */
/* <script src="https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js"></script>*/
/* <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>*/
/* <script src="/site/theme/js/search_twig.js"></script>*/
/* {% include 'footer' %}*/
/* */
/* {% endif %}*/
