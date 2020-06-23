const React = require('react');
const _ = require('underscore');
const Alert = require('react-bootstrap/lib/Alert');
const Button = require('react-bootstrap/lib/Button');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Template = require('./Template.jsx');
const Select = require("../../../shared/components/form/Select.jsx");
const swal = require('sweetalert');
const AppStore = require('../../AppStore');
import cx from "classnames";

let SaveTemplate = React.createClass({
    mixins: [PureMixin],
    
    getInitialState(){
        return {
            name: null,
            loading:false
        };
    },

    handleNameInput(event){
        const name = event.target.value;
        this.setState({
            name: name
        })
    },

    handleSaveTemplateFormSubmit(e){
        e.preventDefault();
        this.setState({loading:true});
        let name = this.state.name;
        let type = 'page';
        let importPromise = AppStore.saveTemplate(name, type);
        importPromise.then(
            res => {
                AppStore.syncSavedTemplateLibrary(res);
                this.setState({
                    name: null,
                    loading:false
                });
            }
        ).catch(
            rej => {
                this.setState({loading:false});
                swal(rej);
            }
        );
    },

    render() {
        let saveButtonIcon = cx({
            "fa fa-refresh fa-spin": this.state.loading,
        });
      

        return (
            <div className="save-template-input">
                <div className="save-template-input-wrapper">
                    <p>Save your page to Onepager library</p>
                    {/* <p>Your page content will be available for export and reuse on any page or website</p> */}
                    <form onSubmit={this.handleSaveTemplateFormSubmit}>
                        <input placeholder="Type your template name" type="text" required name="choose-template-json" id="choose-template-json" onChange={this.handleNameInput} value={this.state.name ? this.state.name : null} />

                        <button type="submit" className="submit-button"> <span className={saveButtonIcon}></span> {this.state.loading ? 'saving': 'save'}</button>
                    </form>
                </div>
            </div>
        );

    }
});

module.exports = SaveTemplate;
