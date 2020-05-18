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


let ImportTemplate = React.createClass({
    getInitialState(){
        return {
            selectedFileData: null,
            loading:false
        };
    },
    mixins: [PureMixin],

    handleTemplateImport(event){
        const files = event.target.files[0];
        this.fileReader = new FileReader();
        this.fileReader.readAsText(files);
        this.fileReader.onload = event => {
            let jsonData = JSON.parse(event.target.result);
            this.setState({ selectedFileData: JSON.parse(event.target.result) });
            console.log('jsondata', jsonData);
        };
    },

    handleImportFormSubmit(e){
        e.preventDefault();
        console.log('form submited');
        this.setState({loading:true});
        let importPromise = AppStore.importTemplate(this.state.selectedFileData);
        // debugger;
        importPromise.then(
            res => {
                this.setState({loading:false});
                console.log(res);
            }
        ).catch(
            rej => {
                this.setState({loading:false});
                swal(rej);
            }
        );
        // if(! this.state.selectedFileData){
        //     swal('please select a json file first');
        // }else{
            
        // }
    },

    render() {
        console.log("importing template");
        console.log('state', this.state);

        return (
            <div>
                <div className="js-upload" uk-form-custom>
                    <form onSubmit={this.handleImportFormSubmit}>
                        <input type="file" name="choose-template-json" id="choose-template-json" accept="application/json" onChange={this.handleTemplateImport} />

                        <button type="submit" className="uk-button uk-button-default">Upload{this.state.loading ? 'ing': ''}</button>
                    </form>
                </div>
            </div>
        );

    }
});

module.exports = ImportTemplate;
