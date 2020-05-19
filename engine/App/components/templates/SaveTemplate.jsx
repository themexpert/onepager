const React = require('react');
const _ = require('underscore');
const Alert = require('react-bootstrap/lib/Alert');
const Button = require('react-bootstrap/lib/Button');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Template = require('./Template.jsx');
const Select = require("../../../shared/components/form/Select.jsx");
// const AppStore  = require('../../stores/AppStore');
const swal = require('sweetalert');
const AppStore = require('../../AppStore');


let SaveTemplate = React.createClass({
    getInitialState(){
        return {
            name: null,
            loading:false
        };
    },
    mixins: [PureMixin],

    handleNameInput(event){
        const name = event.target.value;
        this.setState({
            name: name
        })
    },

    handleSaveTemplateFormSubmit(e){
        e.preventDefault();
        console.log('form submited');
        this.setState({loading:true});
        let name = this.state.name;
        let type = 'page';
        let importPromise = AppStore.saveTemplate(name, type);
        // debugger;
        importPromise.then(
            res => {
                AppStore.syncSavedTemplateLibrary(res);
                this.setState({loading:false});
                console.log(res);
            }
        ).catch(
            rej => {
                this.setState({loading:false});
                swal(rej);
            }
        );
    },

    render() {
        console.log('save template state', this.state);

        return (
            <div>
                <div className="save-template-input-wrapper">
                    <form onSubmit={this.handleSaveTemplateFormSubmit}>
                        <input type="text" name="choose-template-json" id="choose-template-json" onChange={this.handleNameInput} />

                        <button type="submit" className="uk-button uk-button-default">Save{this.state.loading ? 'ing': ''}</button>
                    </form>
                </div>
            </div>
        );

    }
});

module.exports = SaveTemplate;
