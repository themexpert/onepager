import alt from 'alt';
import GeneratorActions from 'GeneratorActions';

class GeneratorStore {
  constructor() {
    this.bindListeners({
      addControl: GeneratorActions.addControl
    });

    this.state = {
      controls: []
    };
  }

  addControl(control) {
    this.setState({ controls: this.state.controls.concat(control) });
  }
}

export default alt.createStore(GeneratorStore, 'GeneratorStore');
