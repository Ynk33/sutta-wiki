import { markdownComponents } from '@/settings/markdown-components';
import ReactMarkdown from 'react-markdown';

export default function Markdown({ children }: { children: string }) {
    return (
        <ReactMarkdown components={markdownComponents}>{ children }</ReactMarkdown>
    )
}