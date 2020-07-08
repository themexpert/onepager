const React = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions = require('../../flux/AppActions.js');
const AppStore = require('../../AppStore.js');
const {opi18n:i18n} = onepager;

import notify from '../../../shared/plugins/notify';

let Block = React.createClass({
  mixins: [PureMixin],

  getInitialState(){
    return {
      blockInsertLoading:false,
    };
  },
  propTypes: {
    block: React.PropTypes.object
  },

  handleCreateSection() {
    /**
     * disable below 4 line 
     * these line are previous code
     */
    // AppActions.addSection(this.props.block);
    //FIXME: return a promise from addSection then hook this success
    // notify.success('New section added');
    // AppStore.setTabState({active: 'op-contents'});
    this.setState({blockInsertLoading:true});
    this.props.handleBlockInsertLoading(true);
    /**
     * promise based reply
     */
    const blockInsertPromise = AppStore.blockInsertToPage(this.props.block);
    blockInsertPromise.then( res => {
      if(res){
        notify.success(i18n.success.section_added);
        this.setState({blockInsertLoading:false});
        this.props.handleBlockInsertLoading(false);
        document.querySelector('#onepager-builder .popup-modal').classList.remove('open');
      }
    }).catch( rej => {
      notify.error(i18n.error.insert);
      this.setState({blockInsertLoading:false});
      this.props.handleBlockInsertLoading(false);
    });
  },

  render() {
    let block = this.props.block;

    return (
      <div className="uk-card uk-card-default uk-card-hover uk-margin-bottom">
        {block.type 
        ? 
        <span className="txop-pro-badge">{block.type}</span>
        : null
        }
        {block.tag 
        ? 
        <span className={`txop-${block.tag}-badge`} >{block.tag}</span>
        : null
        }
        <img src={block.image} alt={block.name} style={{width: "100%"}} data-toggle="tooltip"
             title="+ Click to insert block" data-placement="top"/>
        <div className="overlay">
          <button className="uk-button uk-button-primary" onClick={this.handleCreateSection}> 
          {this.state.blockInsertLoading ? <i className="fa fa-refresh fa-spin"></i> : <i className="fa fa-download"></i>}
            <span>{i18n.insert}</span>
          </button>
          <span className="uk-text-meta uk-hidden">{block.name}</span>
          <span className="uk-text-meta uk-hidden">{block.groups}</span>
        </div>
      </div>
    );
  }
});

module.exports = Block;
