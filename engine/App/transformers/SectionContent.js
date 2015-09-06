import _ from 'lodash';
import $ from 'jquery';

function recursivelyRemoveClassNamesFromSelector($context, selector, classNames) {
  classNames.map(className => $context.find(selector).removeClass(className));
  return $context;
}

function getJQueryObjectFromString(content) {
  return $("<div />", {html: content});
}

let sectionHTMLTransformer = function (content, selectorClassNamesList) {
  let $content = getJQueryObjectFromString(content);

  $content = _.map(selectorClassNamesList, (classNames, selector)=> recursivelyRemoveClassNamesFromSelector($content, selector, classNames));

  return $content.html();
};

let replaceSectionStyleInDOM = function (sectionId, style) {
  $(`#style-${sectionId}`).remove();
  $("head").append(style);
};

