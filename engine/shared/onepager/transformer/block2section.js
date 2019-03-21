import {fromJS} from 'immutable';
import sectionRefer from './sectionRefer.js';
import toolbelt from './../../lib/toolbelt.js';

function getId() {
  return toolbelt.randomId("s_");
}

function getKey() {
  return toolbelt.randomId("k_");
}

function getSectionTitle(section) {
  return section.id ? section.get('title') : section.get('name');
}

function getDuplicateTitle(title) {
  return `${title} (copy)`;
}

export default function (block, duplicate = false) {
  let section = fromJS(block);
  let isNew = !section.get('id');
  
  if (isNew) {
    section = section.set('id', getId());
    section = section.set('title', getSectionTitle(section));
  } else if (duplicate) {
    section = section.set('id', getId());
    section = section.set('title', getDuplicateTitle(section.get('title')));
  }

  /**
   *TODO: rethink about key
   */
  section = section.set('key', getKey());

  section = sectionRefer(section);

  return section.toJS();
}
