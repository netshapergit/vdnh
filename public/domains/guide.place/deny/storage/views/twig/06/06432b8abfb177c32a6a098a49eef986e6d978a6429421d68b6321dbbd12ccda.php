<?php

/* mobile_search */
class __TwigTemplate_f7e34994464e1a05b825a5bfc8344e4248605b0fad49404636a8f52476aebb89 extends TwigBridge\Twig\Template
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
        $tags = array("include" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array(),
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
        echo "<div class=\"msearch\" :class=\"{'msearch--active': isOpened}\" id=\"msearch\">
\t<div class=\"msearch__wrapper\">
\t\t<div class=\"msearch-top\">
\t\t\t<div class=\"msearch-top__wrapper\">
\t\t\t\t<!--
\t\t\t\t<div class=\"msearch-top__filters\">
\t\t\t\t\t
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" viewBox=\"0 0 22 18\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.317383 3.42041C0.317383 2.86813 0.765098 2.42041 1.31738 2.42041H20.3174C20.8697 2.42041 21.3174 2.86813 21.3174 3.42041C21.3174 3.97269 20.8697 4.42041 20.3174 4.42041H1.31738C0.765098 4.42041 0.317383 3.97269 0.317383 3.42041Z\" fill=\"#2D2727\"/><line x1=\"1.31738\" y1=\"14.4204\" x2=\"20.3174\" y2=\"14.4204\" stroke=\"#2D2727\" stroke-width=\"2\" stroke-linecap=\"round\"/><circle cx=\"7.31738\" cy=\"14.4204\" r=\"2.95605\" fill=\"#2D2727\"/><circle cx=\"14.4465\" cy=\"3.42041\" r=\"2.95605\" fill=\"#2D2727\"/></svg>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t-->
\t\t\t\t<div class=\"msearch__header\">
\t\t\t\t\t<a :href=\"searchLink\" class=\"msearch-show-link\" :disabled=\"filteredItems.length == 0\">Показать {{filteredItems.length}} объектов</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"msearch-top__closer\" @click=\"msearchToggle\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\"><path d=\"M18.3235 2.62752C18.714 2.23699 18.714 1.60383 18.3235 1.2133C17.933 0.822779 17.2998 0.822779 16.9093 1.2133L9.58343 8.53918L2.25764 1.21339C1.86712 0.822866 1.23396 0.822865 0.84343 1.21339C0.452906 1.60391 0.452906 2.23708 0.84343 2.6276L8.16922 9.95339L0.843499 17.2791C0.452975 17.6696 0.452974 18.3028 0.843499 18.6933C1.23402 19.0838 1.86719 19.0838 2.25771 18.6933L9.58343 11.3676L16.9092 18.6934C17.2998 19.0839 17.9329 19.0839 18.3235 18.6934C18.714 18.3029 18.714 17.6697 18.3235 17.2792L10.9976 9.95339L18.3235 2.62752Z\" fill=\"#2D2727\"/></svg>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"search-filters\">
\t\t\t\t<div class=\"cont\">
\t\t\t\t\t<div class=\"flexer flexer--jcb flexer--aic\">
\t\t\t\t\t\t";
        // line 23
        $this->loadTemplate("cityswitcher_search", "mobile_search", 23)->display($context);
        // line 24
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"filters\">
\t\t\t\t\t\t<div class=\"filters__wrapper\">
\t\t\t\t\t\t\t<div class=\"filter__group\">
\t\t\t\t\t\t\t\t<div class=\"filter filter--tags\">
\t\t\t\t\t\t\t\t\t<div class=\"tagsearch__input\">
\t\t\t\t\t\t\t\t\t\t<vue-tags-input
\t\t\t\t\t\t\t\t\t\t\tv-model=\"tag\"
\t\t\t\t\t\t\t\t\t\t\t:tags=\"tags\"
\t\t\t\t\t\t\t\t\t\t\t:autocomplete-items=\"filteredTags\"
\t\t\t\t\t\t\t\t\t\t\t@tags-changed=\"newTags => tags = newTags\"
\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Поиск...\"
\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--div class=\"filter__group\">
\t\t\t\t\t\t\t\t<div class=\"filter filter--search\">
\t\t\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\t\t\t\t\tclass=\"form-input form-input--text\" 
\t\t\t\t\t\t\t\t\t\tplaceholder=\"Поиск...\"
\t\t\t\t\t\t\t\t\t\t@input=\"inputHandler\"
\t\t\t\t\t\t\t\t\t\tv-model=\"searchParams.query\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"filter__group filter__group--flex\">
\t\t\t\t\t\t\t\t<div class=\"filter filter--cats\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"\" name=\"mfilter-cat\" v-model=\"searchSelectedCat\" id=\"mfilter-cat-0\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"mfilter-cat-0\">Все</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"11\" name=\"mfilter-cat\" v-model=\"searchSelectedCat\" id=\"mfilter-cat-1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"mfilter-cat-1\">Отели</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"20\" name=\"mfilter-cat\" v-model=\"searchSelectedCat\" id=\"mfilter-cat-2\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"mfilter-cat-2\">Рестораны</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"22\" name=\"mfilter-cat\" v-model=\"searchSelectedCat\" id=\"mfilter-cat-3\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"mfilter-cat-3\">Маршруты</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"24\" name=\"mfilter-cat\" v-model=\"searchSelectedCat\" id=\"mfilter-cat-4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"mfilter-cat-4\">Места</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"26\" name=\"mfilter-cat\" v-model=\"searchSelectedCat\" id=\"mfilter-cat-5\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"mfilter-cat-5\">События</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"44\" name=\"mfilter-cat\" v-model=\"searchSelectedCat\" id=\"mfilter-cat-6\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"mfilter-cat-6\">Кемпинги</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"45\" name=\"mfilter-cat\" v-model=\"searchSelectedCat\" id=\"mfilter-cat-7\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"mfilter-cat-7\">Экскурсии</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"msearch-action\">
\t\t\t\t\t\t<a :href=\"searchLink\" class=\"msearch-show-link\" :disabled=\"filteredItems.length == 0\">Показать {{filteredItems.length}} объектов</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "mobile_search";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  67 => 23,  43 => 1,);
    }
}
/* <div class="msearch" :class="{'msearch--active': isOpened}" id="msearch">*/
/* 	<div class="msearch__wrapper">*/
/* 		<div class="msearch-top">*/
/* 			<div class="msearch-top__wrapper">*/
/* 				<!--*/
/* 				<div class="msearch-top__filters">*/
/* 					*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.317383 3.42041C0.317383 2.86813 0.765098 2.42041 1.31738 2.42041H20.3174C20.8697 2.42041 21.3174 2.86813 21.3174 3.42041C21.3174 3.97269 20.8697 4.42041 20.3174 4.42041H1.31738C0.765098 4.42041 0.317383 3.97269 0.317383 3.42041Z" fill="#2D2727"/><line x1="1.31738" y1="14.4204" x2="20.3174" y2="14.4204" stroke="#2D2727" stroke-width="2" stroke-linecap="round"/><circle cx="7.31738" cy="14.4204" r="2.95605" fill="#2D2727"/><circle cx="14.4465" cy="3.42041" r="2.95605" fill="#2D2727"/></svg>*/
/* 					*/
/* 				</div>*/
/* 				-->*/
/* 				<div class="msearch__header">*/
/* 					<a :href="searchLink" class="msearch-show-link" :disabled="filteredItems.length == 0">Показать {{filteredItems.length}} объектов</a>*/
/* 				</div>*/
/* 				<div class="msearch-top__closer" @click="msearchToggle">*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none"><path d="M18.3235 2.62752C18.714 2.23699 18.714 1.60383 18.3235 1.2133C17.933 0.822779 17.2998 0.822779 16.9093 1.2133L9.58343 8.53918L2.25764 1.21339C1.86712 0.822866 1.23396 0.822865 0.84343 1.21339C0.452906 1.60391 0.452906 2.23708 0.84343 2.6276L8.16922 9.95339L0.843499 17.2791C0.452975 17.6696 0.452974 18.3028 0.843499 18.6933C1.23402 19.0838 1.86719 19.0838 2.25771 18.6933L9.58343 11.3676L16.9092 18.6934C17.2998 19.0839 17.9329 19.0839 18.3235 18.6934C18.714 18.3029 18.714 17.6697 18.3235 17.2792L10.9976 9.95339L18.3235 2.62752Z" fill="#2D2727"/></svg>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="search-filters">*/
/* 				<div class="cont">*/
/* 					<div class="flexer flexer--jcb flexer--aic">*/
/* 						{% include 'cityswitcher_search' %}*/
/* 					</div>*/
/* 					<div class="filters">*/
/* 						<div class="filters__wrapper">*/
/* 							<div class="filter__group">*/
/* 								<div class="filter filter--tags">*/
/* 									<div class="tagsearch__input">*/
/* 										<vue-tags-input*/
/* 											v-model="tag"*/
/* 											:tags="tags"*/
/* 											:autocomplete-items="filteredTags"*/
/* 											@tags-changed="newTags => tags = newTags"*/
/* 											placeholder="Поиск..."*/
/* 										/>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!--div class="filter__group">*/
/* 								<div class="filter filter--search">*/
/* 									<input */
/* 										type="text" */
/* 										class="form-input form-input--text" */
/* 										placeholder="Поиск..."*/
/* 										@input="inputHandler"*/
/* 										v-model="searchParams.query"*/
/* 									>*/
/* 								</div>*/
/* 							</div-->*/
/* 							*/
/* 							<div class="filter__group filter__group--flex">*/
/* 								<div class="filter filter--cats">*/
/* 									<div class="filter-radios">*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="" name="mfilter-cat" v-model="searchSelectedCat" id="mfilter-cat-0">*/
/* 											<label for="mfilter-cat-0">Все</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="11" name="mfilter-cat" v-model="searchSelectedCat" id="mfilter-cat-1">*/
/* 											<label for="mfilter-cat-1">Отели</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="20" name="mfilter-cat" v-model="searchSelectedCat" id="mfilter-cat-2">*/
/* 											<label for="mfilter-cat-2">Рестораны</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="22" name="mfilter-cat" v-model="searchSelectedCat" id="mfilter-cat-3">*/
/* 											<label for="mfilter-cat-3">Маршруты</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="24" name="mfilter-cat" v-model="searchSelectedCat" id="mfilter-cat-4">*/
/* 											<label for="mfilter-cat-4">Места</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="26" name="mfilter-cat" v-model="searchSelectedCat" id="mfilter-cat-5">*/
/* 											<label for="mfilter-cat-5">События</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="44" name="mfilter-cat" v-model="searchSelectedCat" id="mfilter-cat-6">*/
/* 											<label for="mfilter-cat-6">Кемпинги</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="45" name="mfilter-cat" v-model="searchSelectedCat" id="mfilter-cat-7">*/
/* 											<label for="mfilter-cat-7">Экскурсии</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="msearch-action">*/
/* 						<a :href="searchLink" class="msearch-show-link" :disabled="filteredItems.length == 0">Показать {{filteredItems.length}} объектов</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 	</div>*/
/* </div>*/
