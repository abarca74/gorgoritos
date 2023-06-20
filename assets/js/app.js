import { registerReactControllerComponents } from '@symfony/ux-react';
registerReactControllerComponents(require.context('../reactControllers', true, /\.(j|t)sx?$/));

import '../styles/app.scss';
import './alerta'

